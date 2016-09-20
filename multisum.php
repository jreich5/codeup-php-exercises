<?php 

function multisum()
{
    $total = null;
    for ($i = 1; $i <= 1000; $i++) {
        if ($i % 3 || $i % 5) {
            $total += $i;
        }
    } 
    return $total;
}

echo multisum() . PHP_EOL;