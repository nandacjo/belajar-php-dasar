<?php

$string = 'Hello Wolrd';
$number = 24;
$float = 3.14;
$boolan = true;
$array = array("hello", "wolrd", 23, $float, $string);
$new_array = [$string, $number, $array];

var_dump($new_array);
