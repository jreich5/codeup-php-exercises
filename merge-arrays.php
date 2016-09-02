<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael', 'Tim'];


echo 'Exercise 1______________________________________' . PHP_EOL . PHP_EOL;


// Function checks if type returned
function arraySearcher ($query, $array) {
    // if (gettype(array_search($query, $array)) != 'boolean') { ~~~~~~~~~~~~ THIS WAS MY FIRST SOLUTION
    if (array_search($query, $array) !== false) { // Refactor in class
        return true; 
    } else {
        return false;
    }
}

echo arraySearcher('Tina', $names);
echo arraySearcher('Tom', $names);


echo PHP_EOL . 'Exercise 2______________________________________' . PHP_EOL . PHP_EOL;

function arrayComparer ($array1, $array2) {
    $arrayCount = null;
    foreach ($array1 as $element) {
        if (array_search($element, $array2) !== false) { 
            $arrayCount += 1;
        } else {
            continue;
        }
    }
    return $arrayCount . PHP_EOL;
}

echo arrayComparer($names, $compare);


echo PHP_EOL . 'MERGE EXERCISE______________________________________' . PHP_EOL . PHP_EOL;

function combine_arrays ($array1, $array2) 
{
    $newArray = [];
    foreach ($array1 as $key => $element) {
        if ($array1[$key] == $array2[$key]) {
            array_push($newArray, $array1[$key]);
        } else {
            array_push($newArray, $array1[$key], $array2[$key]);
        }
    }
    print_r($newArray);
}

combine_arrays($names, $compare);


function combine_arrays_of_any_length ($array1, $array2) 
{
    $newArray = [];
    var_dump($newArray);
    foreach ($array2 as $element) {
        if (arraySearcher($element, $newArray)) {
            continue;
        } else {
            array_push($newArray, $element);
        }    
    }
    echo 'This is the value of the array with unique values of Array 1......' . PHP_EOL;
    foreach ($array1 as $element) {
        if (arraySearcher($element, $array2)) {
            continue;
        } else {
            array_push($newArray, $element);
        }    
    }
    print_r($newArray);
}

combine_arrays_of_any_length($names, $compare); 