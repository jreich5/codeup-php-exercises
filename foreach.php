<?php 

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);


foreach ($things as $thing) {
    if (is_integer($thing)) {
        echo 'integer' . PHP_EOL;
    } else if (is_float($thing)) {
        echo 'float' . PHP_EOL;
    } else if (is_bool($thing)) {
        echo 'bool' . PHP_EOL;
    } else if (is_array($thing)) {
        echo 'array' . PHP_EOL;
    } else if (is_null($thing)) {
        echo 'null' . PHP_EOL;
    } else if (is_string($thing)) {
        echo 'string' . PHP_EOL;
    } else {
        echo 'Type unknown.' . PHP_EOL;
    }
}

foreach ($things as $thing) {
    if (is_scalar($thing)) {
        echo 'scalar' . PHP_EOL;
        if (is_integer($thing)) {
            echo 'integer' . PHP_EOL;
        } else if (is_float($thing)) {
            echo 'float' . PHP_EOL;
        } else if (is_bool($thing)) {
            echo 'bool' . PHP_EOL;
        } else if (is_array($thing)) {
            echo 'array' . PHP_EOL;
        } else if (is_null($thing)) {
            echo 'null' . PHP_EOL;
        } else if (is_string($thing)) {
            echo 'string' . PHP_EOL;
        } else {
            echo 'Type unknown.' . PHP_EOL;
        }
    } 
}

// is_integer();
// is_float();
// is_bool();
// is_array();
// is_null();
// is_string();

