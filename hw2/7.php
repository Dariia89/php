<!-- 7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты -->

<?php
    function tellTime() {
        $hours = date('h');
        $minutes = date('i');
        
        $date = $hours . checkTime($hours, "hour") . " " . $minutes . checkTime($minutes, "minute");
        return $date;
    }

    function checkTime($time, $type) {
        $lastChar = $time;
        if (strlen(strval($time)) === 2) {
            $lastChar = $time % 10;
        }
        switch($time) {
            case 11:
            case 12:
            case 13:
            case 14:
            case 15:
            case 16:
            case 17:
            case 18:
            case 19:
                return $type === "minute" ? " минут" : " часов"; 
        }
        switch ($lastChar) {
            case 1:
                return $type === "minute" ? " минута" : " час";
            case 2:
            case 3:
            case 4:
                return $type === "minute" ? " минуты" : " часа";
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
            case 0:
                return $type === "minute" ? " минут" : " часов";
        }
    }

    echo tellTime();