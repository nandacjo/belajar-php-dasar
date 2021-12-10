<?php

/**
 * Doo While loop adalah perulangan yang mirip dengan while
 * Perbedaanya hanay pada pengecekan kondisi
 * Pengecekan kondisi di while loopdilakukan di awal sebbelum perulangan dilakukan, sedangakan di do while
 * loop dilakukan setelah perulangan dilakukan
 * Oleh karena itu dalam do while loop, minimal pasti sekali perulangan dilakukan walaupun kondisi tidak
 * bernilai true
 */

$counter = 100;
do {
  echo "Hello Do while loop : " . $counter . PHP_EOL;
  $counter++;
} while ($counter <= 10);
