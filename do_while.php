<?php 

$result = 2;

do {
	echo $result . PHP_EOL;
	$result *= $result;
} while ($result < 1000000);