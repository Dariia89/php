<!-- 3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
Московская область:
Москва, Зеленоград, Клин
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт
Рязанская область … (названия городов можно найти на maps.yandex.ru) -->

<?php
    $regions = [
        'Московская область' => [
            "Москва", "Зеленоград", "Клин"
        ],
        'Ленинградская область' => [
            "Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"
        ],
        'Рязанская область' => [
            "Рязань", "Михайлов", "	Рыбное"
        ]
    ];

    foreach($regions as $region => $cities) {
        $str = implode(", ", $cities);
        echo "$region<br>$str<br>";
    }
?>