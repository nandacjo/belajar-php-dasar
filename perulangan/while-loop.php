<?php

/**
 * While Loop
 * While loop adalah versi perulangan yang lebih sederhana dibanding for loop
 * Di while loop,, hanay terdapat kondisi perulangan, tanpa ada init statement dan post statement
 */

$counter = 1;
while ($counter <= 10) {
  echo "Hello While Loop : " . $counter . PHP_EOL;
  $counter++;
}


// Syntax alternative while loop
$counter = 1;
while ($counter <= 10) :
  echo "Hello While Loop Alternative : " . $counter . PHP_EOL;
  $counter++;
endwhile;
