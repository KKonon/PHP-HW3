<?php

echo ("Задание №1 | Сделайте функцию, которая возвращает куб числа. Число передается параметром.");

echo ("<hr>");

function cube_number($number){

    if (!empty($number)){
        $number = $number * $number * $number;

        echo ("<br>Ответ задания №1: " . $number);
    } else {
        echo ("<br>Ответ задания №1: Введите в переменную число!");
    }
           
}

echo cube_number(2);

echo ("<hr>");

echo ("Задание №2 | Сделайте функцию, которая возвращает сумму двух чисел. Числа передаются параметрами функции.");

echo ("<hr>");

function second_int($number1, $number2){
    if (!empty($number1) && !empty($number2)){
        $summ = $number1 + $number2;

        echo ("<br>Ответ задания №2: " . $summ);
    } else {
        echo ("<br>Ответ задания №2: Введите в переменные числа!");
    }
}

echo second_int(54, 68);

echo ("<hr>");

echo ("Задание №3 | Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.");

echo ("<hr>");

function day($number){
    if(!empty($number)){
        switch($number){
            case ('1'):
                echo ("Понедельник");
                break;
            case ('2'):
                echo ("Вторник");
                break;
            case ('3'):
                echo ("Среда");
                break;
            case ('4'):
                echo ("Четверг");
                break;
            case ('5'):
                echo ("Пятница");
                break;
            case ('6'):
                echo ("Суббота");
                break;
            case ('7'):
                echo ("Воскресенье");
                break;
        }
    } else {
        echo ("<br>Ответ к заданию №3 : Введите число от 1 до 7!");
    }
}

echo day(2);

echo ("<hr>");

echo ("Задание №4 | Сделайте функцию, которая параметром принимает число и проверяет - отрицательное оно или нет. Если отрицательное - пусть функция вернет true, а если нет - false.");

echo ("<hr>");

function checking_numbers($number){
        if (!empty($number) && $number < 1){
            $result = $number;
        echo ("<br>Ответ к заданию №3 : число отрицательное $result это false");
        } else {
            $result = $number;
            ("<br>Ответ к заданию №3 : число положительное $result это true");
        }
}

echo checking_numbers(-5);

echo ("<hr>");

echo ("Задание №5 | Сделайте функцию getDigitsSum (digit - это цифра), которая параметром принимает целое число и возвращает сумму его цифр.");

echo ("<hr>");

function getDigitsSum($digit){
    if(!empty($digit)){
        $arr = str_split($digit);
        $sum = $arr[0] + $arr[1] + $arr[2] + $arr[3] + $arr [4];
        print_r($sum);
    }
}

echo getDigitsSum(335);

echo ("<hr>");

echo ("Задание №7 | Сделайте функцию isEven() (even - это четный), которая параметром принимает целое число и проверяет: четное оно или нет. Если четное - пусть функция возвращает true, если нечетное - false..");

echo ("<hr>");

function isEven($even){

    if($even % 2 == 0) {
        echo "true";
    } else {
        echo "false";
    }
}

echo isEven(64);

echo ("<hr>");

echo ("Задание №8 | Сделайте функцию, которая принимает строку на русском языке, а возвращает ее транслит.");

echo ("<hr>");

function translit($str){
    $rus = array('а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я','А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я');

    $en = array('a','b','v','g','d','e','e','zh','z','i','i','k','l','m','n','o','p','r','s','t','u','f','kh','cz','ch','sh','shh','','y','','e','yu','ya','A','B','V','G','D','E','E','ZH','Z','I','I','K','L','M','N','O','P','R','S','T','U','F','KH','CZ','CH','SH','SHH','','Y','','E','YU','YA');

    return str_replace($rus, $en, $str);
}

echo "<pre>";
echo translit('Кирилл');
echo '</pre>';

