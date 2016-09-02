<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

echo 'Exercise 1______________________________________' . PHP_EOL . PHP_EOL;


// Function checks if type returned
function arraySearcher ($query, $array) {
    // if (gettype(array_search($query, $array)) != 'boolean') { ~~~~~~~~~~~~ THIS WAS MY FIRST SOLUTION
    if (array_search($query, $array) !== false) { // Refactor in class
        return 'true' . PHP_EOL; 
    } else {
        return 'false' . PHP_EOL;
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


