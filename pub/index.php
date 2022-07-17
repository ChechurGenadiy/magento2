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

function getSomeSum(int $leftParam, int $rightParam): int
{
    return $leftParam + $rightParam;
}

echo getSomeSum(4, 9);
