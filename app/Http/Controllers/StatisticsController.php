<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StatisticsController extends Controller
{
    public function showStatistics()
    {
        // Слайд 1: Надпись "ИТОГИ МИМ-2024"
        $year = date("Y");
        $slide1 = "ИТОГИ МИМ-$year";

        // Слайд 2: Общее количество applications и статистика по секциям
        $totalApplications = DB::table('applications')->count();
        $sections = DB::table('sections')
            ->join('applications', 'sections.id', '=', 'applications.section_id')
            ->select('sections.name', DB::raw('count(applications.id) as applications_count'))
            ->groupBy('sections.name')
            ->orderByDesc(DB::raw('count(applications.id)')) // Сортировка по количеству заявок по убыванию
            ->get()
            ->map(function ($section) use ($totalApplications) {
                $section->percentage = ($section->applications_count / $totalApplications) * 100;
                return $section;
            });

        // Слайд 3: Список всех секций и соотношение пользователей не из Тюмени
        $sectionsWithUsers = DB::table('sections')
            ->leftJoin('applications', 'sections.id', '=', 'applications.section_id')
            ->leftJoin('users', 'applications.user_id', '=', 'users.id')
            ->select('sections.name', DB::raw('count(case when users.city != "Тюмень" then 1 end) as non_tyumen_users'), DB::raw('count(users.id) as total_users'))
            ->groupBy('sections.name')
            ->orderByDesc(DB::raw('count(case when users.city != "Тюмень" then 1 end)')) // Сортировка по количеству пользователей не из Тюмени
            ->get();

        // Слайд 4: Уровни образования пользователей
        $educationLevels = DB::table('education_levels')
            ->join('users', 'education_levels.id', '=', 'users.edu_id')
            ->join('applications', 'users.id', '=', 'applications.user_id') // Фильтрация только связанных с заявками
            ->select('education_levels.title', DB::raw('count(users.id) as users_count'))
            ->groupBy('education_levels.title')
            ->orderByDesc(DB::raw('count(users.id)')) // Сортировка по количеству пользователей
            ->get()
            ->map(function ($level) {
                $totalUsers = DB::table('users')
                    ->join('applications', 'users.id', '=', 'applications.user_id') // Также только те пользователи, которые связаны с заявками
                    ->count();
                $level->percentage = ($level->users_count / $totalUsers) * 100;
                return $level;
            });

        // Слайд 5: Места учебы пользователей
        $studyPlaces = DB::table('users')
            ->select('study_place', DB::raw('count(*) as users_count'))
            ->groupBy('study_place')
            ->orderByDesc(DB::raw('count(*)')) // Сортировка по количеству пользователей
            ->get();

        // Слайд 6: Файлы и дипломы
        $totalFiles = DB::table('applications')->whereNotNull('file_path')->count();
        $diplomFilesBySection = DB::table('sections')
            ->leftJoin('applications', 'sections.id', '=', 'applications.section_id')
            ->select('sections.name', DB::raw('count(case when applications.file_path is not null then 1 end) as diplom_files_count'))
            ->groupBy('sections.name')
            ->orderByDesc(DB::raw('count(case when applications.file_path is not null then 1 end)')) // Сортировка по количеству дипломных файлов
            ->get();

        // Слайд 7: Статистика по типам форм участия (type_id)
        $presentationTypes = DB::table('presentation_types')
            ->leftJoin('applications', 'presentation_types.id', '=', 'applications.type_id')
            ->select('presentation_types.name', DB::raw('count(applications.id) as type_count'))
            ->groupBy('presentation_types.name')
            ->orderByDesc(DB::raw('count(applications.id)')) // Сортировка по количеству заявок
            ->get()
            ->map(function ($type) use ($totalApplications) {
                $type->percentage = ($type->type_count / $totalApplications) * 100;
                return $type;
            });

        return view('statistics', compact('slide1', 'totalApplications', 'sections', 'sectionsWithUsers', 'educationLevels', 'studyPlaces', 'totalFiles', 'diplomFilesBySection', 'presentationTypes'));
    }
}
