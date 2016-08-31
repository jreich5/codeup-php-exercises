<?php 

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing) {
    echo gettype($thing) . PHP_EOL;
}

foreach ($things as $thing) {
    if (is_scalar($thing)) {
        print_r($thing);
        echo PHP_EOL;
    }
}

foreach ($things as $thing) {
    if (is_array($thing)) {
        foreach ($thing as $thin) {
            echo($thin);
        }
        echo PHP_EOL;  
    } else {
        echo $thing . PHP_EOL;
    }
}
