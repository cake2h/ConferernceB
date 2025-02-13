<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Статистика МИМ-2024</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }
        h1, h2, h3 {
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
        }
        /* Дополнительные стили для красивого отображения */
        .section-title {
            font-size: 24px;
            color: #2c3e50;
        }
        .statistic-item {
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<h1>{{ $slide1 }}</h1>

<h2>Количество регистраций: {{ $totalApplications }}</h2>
<ul>
    @foreach ($sections as $section)
        <li>{{ $section->name }}: {{ $section->applications_count }} ({{ number_format($section->percentage, 2) }}%)</li>
    @endforeach
</ul>

<h2>Формы участия: {{ $totalApplications }}</h2>
<ul>
    @foreach($presentationTypes as $type)
            <li>{{ $type->name }}: {{ $type->type_count }} ({{ number_format($type->percentage, 2) }}%)</li>
    @endforeach
</ul>

<h2>Иногородние участники</h2>
<ul>
    @foreach ($sectionsWithUsers as $section)
        <li>{{ $section->name }}: {{ $section->non_tyumen_users }}/{{ $section->total_users }}</li>
    @endforeach
</ul>

<h2>Уровни образования</h2>
<ul>
    @foreach ($educationLevels as $level)
        <li>{{ $level->title }}: {{ $level->users_count }} ({{ number_format($level->percentage, 2) }}%)</li>
    @endforeach
</ul>

<h2>Учебные заведения</h2>
<ul>
    @foreach ($studyPlaces as $place)
        <li>{{ $place->study_place }}: {{ $place->users_count }}</li>
    @endforeach
</ul>

<h2>Количество статей в сборнике: {{ $totalFiles }}</h2>
<ul>
    @foreach ($diplomFilesBySection as $section)
        <li>{{ $section->name }}: {{ $section->diplom_files_count }}</li>
    @endforeach
</ul>
</body>
</html>
