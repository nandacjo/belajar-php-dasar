<?php

/**
 * Switch Statement
 * Kadang kita butuh menggunakan kondisi sederhana di fi statement, seperti hanaya menggunakan
 * perbandingan ==
 * Switch adalah statement percabangan yang sama denga if, namun lebih sederhana cara pembuatanya
 * Kondis di switch statement hanya untuk perbandingan ==
 */

$nilai = "B";

switch ($nilai) {
  case "A":
    echo "Anda lulus dengan sangat baik" . PHP_EOL;
    break;
  case "B":
  case "C":
    echo "Anda lulus" . PHP_EOL;
    break;
  case "D":
    echo "Anda tidak lulus" . PHP_EOL;
    break;
  default:
    echo "Mungkin Anda salah jurusan" . PHP_EOL;
}

/**
 * Sytax Alternatif
 * Sama seperti if statement, switch statement juga bisa tana menggunakan {} (kurung kurawal)
 * Namun diakhir switch statement, kita harus menambahakn kata kucni endswitch
 */
$nilai = "A";
switch ($nilai):
  case "A":
    echo "Anda lulus dengan sangat baik" . PHP_EOL;
    break;
  case "B":
  case "C":
    echo "Anda lulus" . PHP_EOL;
    break;
  case "D":
    echo "Anda tidak lulus" . PHP_EOL;
    break;
  default:
    echo "Mungkin Anda salah jurusan" . PHP_EOL;
endswitch;
