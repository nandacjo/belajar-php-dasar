<?php

$phone_number = [
  "nanda" => "+628664163692",
  "malika" => "+6282269189313"
];

var_dump($phone_number);

echo "Nanda's phone number is " . $phone_number["nanda"] . PHP_EOL;
echo "Malika's phone number is " . $phone_number["malika"] . PHP_EOL;

// add number 
$phone_number["rama"] = "+62223344333";


var_dump(array_keys($phone_number));
var_dump(array_values($phone_number));
