<?php

$a = null;
$b = null;

// function checker ($a, $b) {
//     if (!is_numeric($a) || !is_numeric($b)) {
//         echo "Invalid input. Please use numbers.";
//         return false;
//     } else {

// }

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return ($a + $b);    
    } else {
        throwErrorMessage($a, $b);
    }
}

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return ($a - $b); 
    } else {
        throwErrorMessage($a, $b);
    }
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return ($a * $b);   
    } else {
        throwErrorMessage($a, $b);
    }
}

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        if (!$b == 0) {
            return ($a / $b);   
        } else {
            return "Undefined";
        }
    } else {
        throwErrorMessage($a, $b);
    }
}

function modulus($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return ($a % $b);   
    } else {
        throwErrorMessage($a, $b);
    }
}

function square($a) {
    if (is_numeric($a)) {
        return ($a * $a);    
    } else {
        throwErrorMessage($a, $b);
    }
}

function throwErrorMessage ($a, $b) {
    echo "Invalid input. You entered $a $b. Please use numbers." . PHP_EOL;
    return false;
}

// Add code to test your functions here

echo 'Result of add ' . add('hello', 10) . PHP_EOL;
echo 'Result of subtract ' . subtract(10, 10) . PHP_EOL;
echo 'Result of multiply ' . multiply(10, 10) . PHP_EOL;
echo 'Result of divide ' . divide(10, 0) . PHP_EOL;
echo 'Result of modulus ' . modulus(11, 10) . PHP_EOL;
echo 'Result of square ' . square(10) . PHP_EOL;