<?php 

function alphabetSoup($string) 
{
    $explodedArray = explode(' ', $string);
    $newArray = [];
    foreach ($explodedArray as $word) {
        $wordParts = str_split($word);
        sort($wordParts);
        $wordString = implode($wordParts);
        array_push($newArray, $wordString);
    }
    return $newArray;   
}

print_r(alphabetSoup('me or cat bond'));