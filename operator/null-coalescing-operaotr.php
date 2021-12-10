<?php

/**
 * Null Coalescing Operator
 * Sebelumnya kita tahu bahwa data kosong direpresentasikan dengan data NULL di PHP
 * Dah hal yang paling repot di PHP adala mengecek apakah sebuah data ada atau tidak, dan juga apakah
 * data tersebut isninya null atau bukan
 * Biasanay untuk melakukan itu kita perlu menggunakan pengecekan if statement dengan function isset($variable)
 * Namun untungnya di PHP ada null coalescing operator menggunakan tanda ??
 */


// tanap null coalescing operator
$data = [];
if (isset($data['action'])) {
  $action = $data['action'];
} else {
  $action = "Nothing";
}
echo $action . PHP_EOL;


// menggukanak null coalescing operator
$value = [
  "action" => "run"
];
$action = $value["action"] ?? "Nothing";
echo $action;
