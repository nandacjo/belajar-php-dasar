<?php

/**
 * Variable - Length Argumetn List
 * variable-length argument list merupakan kemampuan diaman kita bisa membuat sebuah parameter
 * yang menerima banyak value
 * Variable-length argument list secara otomatis akan membuat argument tersebut menjadi array,
 * namun kita tidak perlu manual mengirim array ke functionnya
 * Variable - length argument list hanya bisa dilakukan di argument posisi terakhir
 * Untuk membuat variable - length argument list, kita bisa menggunakan tanda ... (titik tigak kali)
 * sebelum nama argument
 */

// Kode: Variable - length Argument List
function sumAll(...$values)
{
  $total = 0;
  foreach ($values as $value) {
    $total += $value;
  }
  echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

$data = [10, 20, 30, 40];

sumAll(10, 20, 30, 40);
sumAll(...[10, 20, 30, 40]);
sumAll(...$data);
