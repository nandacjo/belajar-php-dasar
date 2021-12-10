<?php

/**
 * For Loop
 * For adalah salah satu kata kunci yang bisa digunakan untuk melakukan perulangan
 * Blok kode yang terdapat di dalam for akan selalu diulangi selama kondisi for terpenuhi
 * 
 * Init statement akan diesksekusi hanay sekali di awal sebelum perulangan
 * Kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan,
 * jika false perulangan akan berhenti
 * Post statemetn akan dieksekusi setiap kali diakhir perulangn
 * Init statemet, Kondis dan post statement tidak wajib diisi, jika kondisi tidak diisi, berati kondisi 
 * selalu bernilai true
 */

// Perulanga tanap henti

// for (;;) {
//   echo "Hell For Loop" . PHP_EOL;
// }


// Perulangan dengan kondisi
$counter = 1;
for (; $counter <= 10;) {
  echo "Hello For Looop : " . $counter . PHP_EOL;
  $counter++;
}


// Perulangan dengan Init statement
for ($counter = 1; $counter <= 10;) {
  echo "Hello For Loop : " . $counter . PHP_EOL;
  $counter++;
}


// Perulanga dengan post statement
for ($counter = 1; $counter <= 5; $counter++) {
  echo "Hello For LOOP : " . $counter . PHP_EOL;
}


// syntax alternative for loop
for ($counter = 1; $counter <= 5; $counter++) :
  echo "Hello For Love : " . $counter . PHP_EOL;
endfor;
