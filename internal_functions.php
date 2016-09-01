<?php

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

$dataTypeList = [
    $num1,
    $num2,
    $num3,
    $num4,
    $null,
    $bool1,
    $bool2,
    $string1,
    $string2,
    $array1,
    $array2
];

$dataTypeList = [$num1, $num2, $num3, $num4, $null, $bool1, $bool2, $string1, $string2, $array1, $array2];

function sifter ($array) {
    foreach ($array as $item) {
        $i += 1;
        echo "Inspecting...$item";
        print_r($item);
        echo PHP_EOL;
        inspect($item);
    }
}



// TODO: Create your inspect() function here


function inspect ($content) {
    $type = gettype($content);
    switch ($type) {
        case 'boolean':
            if ($content == 0) {
                echo 'The value is: false' . PHP_EOL;
            } else {
                echo 'The value is: true' . PHP_EOL;
            }
            break;
        case 'array':
            if (!empty($content)) {
                echo 'The value is: an array' . PHP_EOL;
            } else {
                echo 'The value is: an empty array' . PHP_EOL;
            }
            break;
        case 'NULL':
            echo 'The value is: null.' . PHP_EOL;
            break;
        case 'string':
            if (empty($content)) {
                echo 'The value is: an empty string' . PHP_EOL;
            } else {
                echo "The $type is: $content" . PHP_EOL; 
            }
            break;
        default:
            echo "The $type is: $content" . PHP_EOL; 
    }
}



// TODO: After each echo statement, use inspect() to output the variable's type and its value

// echo 'Inspecting $num1:' . PHP_EOL;
// inspect($num1);

// echo 'Inspecting $num2:' . PHP_EOL;
// inspect($num2);

// echo 'Inspecting $num3:' . PHP_EOL;
// inspect($num3);

// echo 'Inspecting $num4:' . PHP_EOL;
// inspect($num4);

// echo 'Inspecting $null:' . PHP_EOL;
// inspect($null);

// echo 'Inspecting $bool1' . PHP_EOL;
// inspect($bool1);

// echo 'Inspecting $bool2' . PHP_EOL;
// inspect($bool2);

// echo 'Inspecting $string1' . PHP_EOL;
// inspect($string1);

// echo 'Inspecting $string2' . PHP_EOL;
// inspect($string2);

// echo 'Inspecting $array1' . PHP_EOL;
// inspect($array1);

// echo 'Inspecting $array2' . PHP_EOL;
// inspect($array2);

sifter($dataTypeList);
