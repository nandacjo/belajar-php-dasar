<?php

/**
 * di PHP, array memiliki operator khusus
 * Mungkin terlihat mirip dengan operato-operator sebelumnya
 * tapi cara kerjanaya sediki berbeda
 */

// operator array satu
$first = [
  "first_name" => "Eko"
];

$last = [
  "last_name" => "khannedy"
];

var_dump($first + $last);


// Operator array dua
$a = [
  "first_name" => "Eko",
  "last_name" => "Khannedy"
];

$b = [
  "last_name" => "Khannedy",
  "first_name" => "Eko",
];

var_dump($a == $b);
var_dump($a === $b);
