<?php

//Type string
$productName = "iPhone 3e44"; # 'iPhone 3e44';
//Type integer (int)
$productVersion = 4;
//Type float
$productSubversion = 13.234;
//Type array
$availableColors = ["Yellow", "Green", "Black"];
//Type array
$availablePrograms = [
    3 => [
        "Chrome",
        "Safari",
    ],
    4 => [
        "GoogleMaps",
        "shguihgorh",
        "esghuighrog",
    ],
    5 => [
        "Maps",
        "OPpera",
        "Viber" => [
            "Viber CE",
            "Viber EE",
        ],
        "Some 1",
        "Some 2"
    ],
];
//Type boolean
$isAvailable = false; #false


#######################################################################################################################

$variable = 1 + 2 / 3 * 4;
$variable /= 2; # => $variable = $variable / 2;
$variable -= 5; # => $variable = $variable - 5;
$variable++; # => $variable = $variable + 1;
$variable--; # => $variable = $variable - 1;



#######################################################################################################################

//for ($iterator = 1; $iterator <= 10; $iterator++) {
//    echo "Current iterator equals " . $iterator . '<br>';
//}

#######################################################################################################################

//echo $availableColors[2];

#echo $availablePrograms[5]['Viber'][0];
#var_dump($availablePrograms[5]);

#######################################################################################################################

//foreach ($availablePrograms as $key => $availableColorValue) {
//    echo "Current foreach value: " . $availableColorValue . ', with key: ' . $key . '<br>';
//}

#######################################################################################################################
//
//function getSomeSum(int $leftParam, int $rightParam): int
//{
//    return $leftParam + $rightParam;
//}
//
//echo getSomeSum(4, 9);


#######################################################################################################################
### 0. Читать про РНР/MySQL
### 1. Создать переменные со всеми возможными типами переменных. (int, bool, многомерный массив и т.д.)
### 2. Написать функцию которая будет считать факториал числа с помощью цикла for (в параметре передаем число для которого нужно найти факториал)
### 3. Написать функцию которая находит максимальное из 3х чисел (все числа вводятся через параметры)
### 4. Написать функцию которая используя foreach будет выводить все ключи у которых в значении массива присутствует значение "red"
        //$var = [
        //   "one" => [
        //        "awdadawd",
        //        "awdabt",
        //        "red",
        //    ],
        //    "two" => [
        //        "awdawdawd",
        //        "hrtrne45",
        //    ],
        //    "three" => [
        //        "red",
        //    ],
        //];
### 5. Написать функцию которая будет в переданном массиве менять местами ключи со значениями
### 6. Написать функцию которая в переданном одномерном массиве находит наименьшее и наибольшее число и возвращает это в виде массива
###    с ключами min и max.
### 7. Написать функцию которая принимает в параметрах два ономерных массива. В каждом из них функция ищет минимальное
###    и максимальное значение и делает сумму этих значений для каждого из массива.
###    Если сумма из первого массива больше чем второго выводим "Yes", иначе выводим "No"
### 8. Написать функцию которая считает денежную комиссию(входные параметры сумма денег и валюта операции). У нас будет только 3 валюты - UAH, EUR и USD.
###    Если валюта равна UAH и сумма меньше 19000 то комиссия 4.5%, иначе комиссия 0.3%
###    Если валюта равна EUR и сумма меньше 9600 то комиссия 1.2%, иначе комиссия 0.6%
###    Если валюта равна USD и сумма меньше 2200 то комиссия 17%, иначе комиссия 0%
