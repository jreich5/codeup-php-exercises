<?php 

function findTheNumber()
{
    $total = null;
    for ($i = 1; $i <= PHP_INT_MAX; $i++) {
        // echo $i . PHP_EOL;
        if ($total === 0) {
            return $i;
        }
        $total = 0;
        for ($j = 1; $j <= 20; $j++) {
            $total += ($i % $j);         
        }    
    } 
}

echo findTheNumber();