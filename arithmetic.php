<?php

$a = 20;

$b = 2;

function add($a, $b) {
    return ($a + $b);
}

function subtract($a, $b) {
    return ($a - $b);
}

function multiply($a, $b) {
    return ($a * $b);
}

function divide($a, $b) {
    return ($a / $b);
}

function modulus($a, $b) {
    return ($a % $b);
}

// Add code to test your functions here

echo 'Result of add ' . add(10, 10) . PHP_EOL;
echo 'Result of subtract ' . subtract(10, 10) . PHP_EOL;
echo 'Result of multiply ' . multiply(10, 10) . PHP_EOL;
echo 'Result of divide ' . divide(10, 10) . PHP_EOL;
echo 'Result of modulus ' . modulus(11, 10) . PHP_EOL;