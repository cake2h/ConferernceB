
    
    <style>
        form {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 4px;
}

/* Стили для заголовка формы */
form h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

/* Стили для полей ввода */
form div {
  margin-bottom: 15px;
}

form div label {
  display: block;
  margin-bottom: 5px;
  color: #555;
}

form div select,
form div input[type="text"],
form div input[type="email"],
form div input[type="password"],
form div input[type="date"] {
  width: 100%;
  padding: 8px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

/* Стили для кнопок */
form div a {
  display: block;
  margin-bottom: 10px;
  color: #00aeef;
  text-decoration: none;
}

form div button {
  display: block;
  width: 100%;
  padding: 10px;
  font-size: 16px;
  background-color: #00aeef;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* Стили для ошибок валидации */
form div .error-message {
  color: #ff0000;
  margin-top: 5px;
  font-size: 14px;
}

/* Дополнительные стили */
body {
  background-color: #e9e9e9;
  font-family: Arial, sans-serif;
  line-height: 1.5;
}
        </style>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Имя')" />
            <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" />
        </div>

        <!-- Email Address -->
        <div >
            <x-input-label for="email" :value="__('Почта')" />
            <x-text-input id="email"  type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')"  />
        </div>

        <div >
            <x-input-label for="age" :value="__('Год рождения')" />
            <x-text-input id="age"  type="date" name="age" :value="old('age')" required autocomplete="age" />
            <x-input-error :messages="$errors->get('age')"" />
        </div>
        <div >
            <x-input-label for="city" :value="__('Город')" />
            <select id="city"  type="text" name="city" :value="old('city')" required autocomplete="city" >
               
            <option value="Москва">Москва</option>
    <option value="Санкт-Петербург">Санкт-Петербург</option>
    <option value="Пенза">Пенза</option>
    <option value="Абакан">Абакан</option>
    <option value="Азов">Азов</option>
    <option value="Александров">Александров</option>
    <option value="Алексин">Алексин</option>
    <option value="Альметьевск">Альметьевск</option>
    <option value="Анапа">Анапа</option>
    <option value="Ангарск">Ангарск</option>
    <option value="Анжеро">Анжеро-Судженск</option>
    <option value="Апатиты">Апатиты</option>
    <option value="Арзамас">Арзамас</option>
    <option value="Армавир">Армавир</option>
    <option value="Арсеньев">Арсеньев</option>
    <option value="Артем">Артем</option>
    <option value="Архангельск">Архангельск</option>
    <option value="Асбест">Асбест</option>
    <option value="Астрахань">Астрахань</option>
    <option value="Ачинск">Ачинск</option>
    <option value="Балаково">Балаково</option>
    <option value="Балахна">Балахна</option>
    <option value="Балашиха">Балашиха</option>
    <option value="Балашов">Балашов</option>
    <option value="Барнаул">Барнаул</option>
    <option value="Батайск">Батайск</option>
    <option value="Белгород">Белгород</option>
    <option value="Белебей">Белебей</option>
    <option value="Белово">Белово</option>
    <option value="Белогорск (Амурская область)">Белогорск (Амурская область)</option>
    <option value="Белорецк">Белорецк</option>
    <option value="Белореченск">Белореченск</option>
    <option value="Бердск">Бердск</option>
    <option value="Березники">Березники</option>
    <option value="Березовский (Свердловская область)">Березовский (Свердловская область)</option>
    <option value="Бийск">Бийск</option>
    <option value="Биробиджан">Биробиджан</option>
    <option value="Благовещенск (Амурская область)">Благовещенск (Амурская область)</option>
    <option value="Бор">Бор</option>
    <option value="Борисоглебск">Борисоглебск</option>
    <option value="Боровичи">Боровичи</option>
    <option value="Братск">Братск</option>
    <option value="Брянск">Брянск</option>
    <option value="Бугульма">Бугульма</option>
    <option value="Буденновск">Буденновск</option>
    <option value="Бузулук">Бузулук</option>
    <option value="Буйнакск">Буйнакск</option>
    <option value="Великие Луки">Великие Луки</option>
    <option value="Великий Новгород">Великий Новгород</option>
    <option value="Верхняя Пышма">Верхняя Пышма</option>
    <option value="Видное">Видное</option>
    <option value="Владивосток">Владивосток</option>
    <option value="Владикавказ">Владикавказ</option>
    <option value="Владимир">Владимир</option>
    <option value="Волгоград">Волгоград</option>
    <option value="Волгодонск">Волгодонск</option>
    <option value="Волжск">Волжск</option>
    <option value="Волжский">Волжский</option>
    <option value="Вологда">Вологда</option>
    <option value="Вольск">Вольск</option>
    <option value="Воркута">Воркута</option>
    <option value="Воронеж">Воронеж</option>
    <option value="Воскресенск">Воскресенск</option>
    <option value="Воткинск">Воткинск</option>
    <option value="Всеволожск">Всеволожск</option>
    <option value="Выборг">Выборг</option>
    <option value="Выкса">Выкса</option>
    <option value="Вязьма">Вязьма</option>
    <option value="Гатчина">Гатчина</option>
    <option value="Геленджик">Геленджик</option>
    <option value="Георгиевск">Георгиевск</option>
    <option value="Глазов">Глазов</option>
    <option value="Горно-Алтайск">Горно-Алтайск</option>
    <option value="Грозный">Грозный</option>
    <option value="Губкин">Губкин</option>
    <option value="Гудермес">Гудермес</option>
    <option value="Гуково">Гуково</option>
    <option value="Гусь-Хрустальный">Гусь-Хрустальный</option>
    <option value="Дербент">Дербент</option>
    <option value="Дзержинск">Дзержинск</option>
    <option value="Димитровград">Димитровград</option>
    <option value="Дмитров">Дмитров</option>
    <option value="Долгопрудный">Долгопрудный</option>
    <option value="Домодедово">Домодедово</option>
    <option value="Донской">Донской</option>
    <option value="Дубна">Дубна</option>
    <option value="Евпатория">Евпатория</option>
    <option value="Егорьевск">Егорьевск</option>
    <option value="Ейск">Ейск</option>
    <option value="Екатеринбург">Екатеринбург</option>
    <option value="Елабуга">Елабуга</option>
    <option value="Елец">Елец</option>
    <option value="Ессентуки">Ессентуки</option>
    <option value="Железногорск (Красноярский край)">Железногорск (Красноярский край)</option>
    <option value="Железногорск (Курская область)">Железногорск (Курская область)</option>
    <option value="Жигулевск">Жигулевск</option>
    <option value="Жуковский">Жуковский</option>
    <option value="Заречный">Заречный</option>
    <option value="Зеленогорск">Зеленогорск</option>
    <option value="Зеленодольск">Зеленодольск</option>
    <option value="Златоуст">Златоуст</option>
    <option value="Иваново">Иваново</option>
    <option value="Ивантеевка">Ивантеевка</option>
    <option value="Ижевск">Ижевск</option>
    <option value="Избербаш">Избербаш</option>
    <option value="Иркутск">Иркутск</option>
    <option value="Искитим">Искитим</option>
    <option value="Ишим">Ишим</option>
    <option value="Ишимбай">Ишимбай</option>
    <option value="Йошкар-Ола">Йошкар-Ола</option>
    <option value="Казань">Казань</option>
    <option value="Калининград">Калининград</option>
    <option value="Калуга">Калуга</option>
    <option value="Каменск-Уральский">Каменск-Уральский</option>
    <option value="Каменск-Шахтинский">Каменск-Шахтинский</option>
    <option value="Камышин">Камышин</option>
    <option value="Канск">Канск</option>
    <option value="Каспийск">Каспийск</option>
    <option value="Кемерово">Кемерово</option>
    <option value="Керчь">Керчь</option>
    <option value="Кинешма">Кинешма</option>
    <option value="Кириши">Кириши</option>
    <option value="Киров (Кировская область)">Киров (Кировская область)</option>
    <option value="Кирово-Чепецк">Кирово-Чепецк</option>
    <option value="Киселевск">Киселевск</option>
    <option value="Кисловодск">Кисловодск</option>
    <option value="Клин">Клин</option>
    <option value="Клинцы">Клинцы</option>
    <option value="Ковров">Ковров</option>
    <option value="Когалым">Когалым</option>
    <option value="Коломна">Коломна</option>
    <option value="Комсомольск-на-Амуре">Комсомольск-на-Амуре</option>
    <option value="Копейск">Копейск</option>
    <option value="Королев">Королев</option>
    <option value="Кострома">Кострома</option>
    <option value="Котлас">Котлас</option>
    <option value="Красногорск">Красногорск</option>
    <option value="Краснодар">Краснодар</option>
    <option value="Краснокаменск">Краснокаменск</option>
    <option value="Краснокамск">Краснокамск</option>
    <option value="Краснотурьинск">Краснотурьинск</option>
    <option value="Красноярск">Красноярск</option>
    <option value="Кропоткин">Кропоткин</option>
    <option value="Крымск">Крымск</option>
    <option value="Кстово">Кстово</option>
    <option value="Кузнецк">Кузнецк</option>
    <option value="Кумертау">Кумертау</option>
    <option value="Кунгур">Кунгур</option>
    <option value="Курган">Курган</option>
    <option value="Курск">Курск</option>
    <option value="Кызыл">Кызыл</option>
    <option value="Лабинск">Лабинск</option>
    <option value="Лениногорск">Лениногорск</option>
    <option value="Ленинск-Кузнецкий">Ленинск-Кузнецкий</option>
    <option value="Лесосибирск">Лесосибирск</option>
    <option value="Липецк">Липецк</option>
    <option value="Лиски">Лиски</option>
    <option value="Лобня">Лобня</option>
    <option value="Лысьва">Лысьва</option>
    <option value="Лыткарино">Лыткарино</option>
    <option value="Люберцы">Люберцы</option>
    <option value="Магадан">Магадан</option>
    <option value="Магнитогорск">Магнитогорск</option>
    <option value="Майкоп">Майкоп</option>
    <option value="Махачкала">Махачкала</option>
    <option value="Междуреченск">Междуреченск</option>
    <option value="Мелеуз">Мелеуз</option>
    <option value="Миасс">Миасс</option>
    <option value="Минеральные Воды">Минеральные Воды</option>
    <option value="Минусинск">Минусинск</option>
    <option value="Михайловка">Михайловка</option>
    <option value="Михайловск (Ставропольский край)">Михайловск (Ставропольский край)</option>
    <option value="Мичуринск">Мичуринск</option>
    <option value="Мурманск">Мурманск</option>
    <option value="Муром">Муром</option>
    <option value="Мытищи">Мытищи</option>
    <option value="Набережные Челны">Набережные Челны</option>
    <option value="Назарово">Назарово</option>
    <option value="Назрань">Назрань</option>
    <option value="Нальчик">Нальчик</option>
    <option value="Наро-Фоминск">Наро-Фоминск</option>
    <option value="Находка">Находка</option>
    <option value="Невинномысск">Невинномысск</option>
    <option value="Нерюнгри">Нерюнгри</option>
    <option value="Нефтекамск">Нефтекамск</option>
    <option value="Нефтеюганск">Нефтеюганск</option>
    <option value="Нижневартовск">Нижневартовск</option>
    <option value="Нижнекамск">Нижнекамск</option>
    <option value="Нижний Новгород">Нижний Новгород</option>
    <option value="Нижний Тагил">Нижний Тагил</option>
    <option value="Новоалтайск">Новоалтайск</option>
    <option value="Новокузнецк">Новокузнецк</option>
    <option value="Новокуйбышевск">Новокуйбышевск</option>
    <option value="Новомосковск">Новомосковск</option>
    <option value="Новороссийск">Новороссийск</option>
    <option value="Новосибирск">Новосибирск</option>
    <option value="Новотроицк">Новотроицк</option>
    <option value="Новоуральск">Новоуральск</option>
    <option value="Новочебоксарск">Новочебоксарск</option>
    <option value="Новочеркасск">Новочеркасск</option>
    <option value="Новошахтинск">Новошахтинск</option>
    <option value="Новый Уренгой">Новый Уренгой</option>
    <option value="Ногинск">Ногинск</option>
    <option value="Норильск">Норильск</option>
    <option value="Ноябрьск">Ноябрьск</option>
    <option value="Нягань">Нягань</option>
    <option value="Обнинск">Обнинск</option>
    <option value="Одинцово">Одинцово</option>
    <option value="Озерск (Челябинская область)">Озерск (Челябинская область)</option>
    <option value="Октябрьский">Октябрьский</option>
    <option value="Омск">Омск</option>
    <option value="Орел">Орел</option>
    <option value="Оренбург">Оренбург</option>
    <option value="Орехово-Зуево">Орехово-Зуево</option>
    <option value="Орск">Орск</option>
    <option value="Павлово">Павлово</option>
    <option value="Павловский Посад">Павловский Посад</option>
    <option value="Первоуральск">Первоуральск</option>
    <option value="Пермь">Пермь</option>
    <option value="Петрозаводск">Петрозаводск</option>
    <option value="Петропавловск-Камчатский">Петропавловск-Камчатский</option>
    <option value="Подольск">Подольск</option>
    <option value="Полевской">Полевской</option>
    <option value="Прокопьевск">Прокопьевск</option>
    <option value="Прохладный">Прохладный</option>
    <option value="Псков">Псков</option>
    <option value="Пушкино">Пушкино</option>
    <option value="Пятигорск">Пятигорск</option>
    <option value="Раменское">Раменское</option>
    <option value="Ревда">Ревда</option>
    <option value="Реутов">Реутов</option>
    <option value="Ржев">Ржев</option>
    <option value="Рославль">Рославль</option>
    <option value="Россошь">Россошь</option>
    <option value="Ростов-на-Дону">Ростов-на-Дону</option>
    <option value="Рубцовск">Рубцовск</option>
    <option value="Рыбинск">Рыбинск</option>
    <option value="Рязань">Рязань</option>
    <option value="Салават">Салават</option>
    <option value="Сальск">Сальск</option>
    <option value="Самара">Самара</option>
    <option value="Саранск">Саранск</option>
    <option value="Сарапул">Сарапул</option>
    <option value="Саратов">Саратов</option>
    <option value="Саров">Саров</option>
    <option value="Свободный">Свободный</option>
    <option value="Севастополь">Севастополь</option>
    <option value="Северодвинск">Северодвинск</option>
    <option value="Северск">Северск</option>
    <option value="Сергиев Посад">Сергиев Посад</option>
    <option value="Серов">Серов</option>
    <option value="Серпухов">Серпухов</option>
    <option value="Сертолово">Сертолово</option>
    <option value="Сибай">Сибай</option>
    <option value="Симферополь">Симферополь</option>
    <option value="Славянск-на-Кубани">Славянск-на-Кубани</option>
    <option value="Смоленск">Смоленск</option>
    <option value="Соликамск">Соликамск</option>
    <option value="Солнечногорск">Солнечногорск</option>
    <option value="Сосновый Бор">Сосновый Бор</option>
    <option value="Сочи">Сочи</option>
    <option value="Ставрополь">Ставрополь</option>
    <option value="Старый Оскол">Старый Оскол</option>
    <option value="Стерлитамак">Стерлитамак</option>
    <option value="Ступино">Ступино</option>
    <option value="Сургут">Сургут</option>
    <option value="Сызрань">Сызрань</option>
    <option value="Сыктывкар">Сыктывкар</option>
    <option value="Таганрог">Таганрог</option>
    <option value="Тамбов">Тамбов</option>
    <option value="Тверь">Тверь</option>
    <option value="Тимашевск">Тимашевск</option>
    <option value="Тимашевск">Тихвин</option>
    <option value="Тихорецк">Тихорецк</option>
    <option value="Тобольск">Тобольск</option>
    <option value="Тольятти">Тольятти</option>
    <option value="Томск">Томск</option>
    <option value="Троицк">Троицк</option>
    <option value="Туапсе">Туапсе</option>
    <option value="Туймазы">Туймазы</option>
    <option value="Тула">Тула</option>
    <option value="Тюмень">Тюмень</option>
    <option value="Узловая">Узловая</option>
    <option value="Улан-Удэ">Улан-Удэ</option>
    <option value="Ульяновск">Ульяновск</option>
    <option value="Урус-Мартан">Урус-Мартан</option>
    <option value="Усолье-Сибирское">Усолье-Сибирское</option>
    <option value="Уссурийск">Уссурийск</option>
    <option value="Усть-Илимск">Усть-Илимск</option>
    <option value="Уфа">Уфа</option>
    <option value="Ухта">Ухта</option>
    <option value="Феодосия">Феодосия</option>
    <option value="Фрязино">Фрязино</option>
    <option value="Хабаровск">Хабаровск</option>
    <option value="Ханты-Мансийск">Ханты-Мансийск</option>
    <option value="Хасавюрт">Хасавюрт</option>
    <option value="Химки">Химки</option>
    <option value="Чайковский">Чайковский</option>
    <option value="Чапаевск">Чапаевск</option>
    <option value="Чебоксары">Чебоксары</option>
    <option value="Челябинск">Челябинск</option>
    <option value="Черемхово">Черемхово</option>
    <option value="Череповец">Череповец</option>
    <option value="Черкесск">Черкесск</option>
    <option value="Черногорск">Черногорск</option>
    <option value="Чехов">Чехов</option>
    <option value="Чистополь">Чистополь</option>
    <option value="Чита">Чита</option>
    <option value="Шадринск">Шадринск</option>
    <option value="Шали">Шали</option>
    <option value="Шахты">Шахты</option>
    <option value="Шуя">Шуя</option>
    <option value="Щекино">Щекино</option>
    <option value="Щелково">Щелково</option>
    <option value="Электросталь">Электросталь</option>
    <option value="Элиста">Элиста</option>
    <option value="Энгельс">Энгельс</option>
    <option value="Южно-Сахалинск">Южно-Сахалинск</option>
    <option value="Юрга">Юрга</option>
    <option value="Якутск">Якутск</option>
    <option value="Ялта">Ялта</option>
    <option value="Ярославль">Ярославль</option>
 
</select>
            <x-input-error :messages="$errors->get('city')"  />
        </div>
        <div >
            <x-input-label for="science_level" :value="__('Уровень образования')" />
            <x-text-input id="science_level" type="text" name="science_level" :value="old('science_level')" required autocomplete="science_level" />
            <x-input-error :messages="$errors->get('science_level')"  />
        </div>
        <div >
            <x-input-label for="study_place" :value="__('Место учебы')" />
            <x-text-input id="study_place"  type="text" name="study_place" :value="old('study_place')" required autocomplete="study_place" />
            <x-input-error :messages="$errors->get('study_place')"  />
        </div>
        <!-- Password -->
        <div >
            <x-input-label for="password" :value="__('Пароль')" />

            <x-text-input id="password" 
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')"  />
        </div>

        <!-- Confirm Password -->
        <div >
            <x-input-label for="password_confirmation" :value="__('Повторите пароль')" />

            <x-text-input id="password_confirmation" 
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')"  />
        </div>

        <div>
            <a  href="{{ route('login') }}">
                {{ __('Уже зарегистрированы?') }}
            </a>

            <x-primary-button >
                {{ __('Зарегистрироваться') }}
            </x-primary-button>
        </div>
    </form>

