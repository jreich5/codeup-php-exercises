<?php 

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';




// $physicistsArray = explode(', ', $physicistsString);
// $lastValue = array_pop($physicistsArray);
// array_push($physicistsArray, "and $lastValue");
// $famousFakePhysicists = implode(', ', $physicistsArray);



// Second parameter, if passed as true when function is called will sort the list passed in the first argument in alphabetical order
function humanizedList ($string, $sort = false) {
    $string = explode(', ', $string);
    if ($sort) {
        asort($string);
    }
    $lastValue = array_pop($string);
    array_push($string, "and $lastValue");
    return $output = implode(', ', $string);
}

$famousFakePhysicists = humanizedList($physicistsString, true);



echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";