<?php

$cars = array(
  array("Volvo", 22, 18),
  array("BMW", 15, 13),
  array("Saab", 5, 2),
  array("Land Rover", 17, 15)
);

var_dump($cars);
$i = 1;
foreach ($cars as $car) {
  echo "Row Number " . $i++ . PHP_EOL;
  foreach ($car as $c) {
    echo $c . PHP_EOL;
  }
}

$abjad = ["b", "c", "a", "d"];
echo sort($abjad) . PHP_EOL;
