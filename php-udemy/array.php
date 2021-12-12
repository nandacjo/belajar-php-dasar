<?php

$odd_number = [1, 2, 3, 4, 5];
$odd_number[] = 6;
$odd_number[1] = 0;

var_dump($odd_number);
var_dump(count($odd_number));
unset($odd_number[1]);

var_dump($odd_number);
var_dump(reset($odd_number));
var_dump(end($odd_number));
