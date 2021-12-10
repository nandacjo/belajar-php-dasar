<?php

/**
 * Dalam PHP, if adalah salah satu kata kunci yang digunakan untuk percabangan
 * Percanbanga artinya kita bisa mengeksekusi kode program tertentu ketika suatu kondisi terpenuhi
 * Hampri di semua bahsa pemrograman mendukung if expression
 */

$nilai = 80;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
  echo "Anda lulus " . PHP_EOL;
}

/**
 * Else Statement
 * Blok if akan dieksekusi ketika kondisi if bernilai true
 * Kadang kita ingin melakukan eksekusi program tertentu jika kondisi if bernilai false
 * Hal in bisa dilakukan menggunakan else statement
 */

$nilai = 50;

if ($nilai >= 75 && $absen >= 75) {
  echo "Anda Lulus denga Baik " . PHP_EOL;
} else {
  echo "Anda Tidak Lulus" . PHP_EOL;
}

/**
 * Else if Statement
 * Kadang dalam if, kita butuh membuat beberap kondisi
 * Kasus seperti ini, di PHP kita bisa menggunakan Else if Statement
 * Else if di PHP bisa lebih dari satu
 * Kode Else if di PHP bisa mengguanakn "else if" atau "elseif" (digabung)
 */

$nilai = 70;

if ($nilai >= 80 && $absen >= 80) {
  echo "Nilai Anda A " . PHP_EOL;
} elseif ($nilai >= 70 && $absen >= 70) {
  echo "Nilai Anda B " . PHP_EOL;
} elseif ($niali >= 60 && $absen >= 60) {
  echo "NIlai Anda C " . PHP_EOL;
} elseif ($niali >= 50 && $absen >= 50) {
  echo "NIlai Anda D " . PHP_EOL;
} else {
  echo "Nilai Anda E " . PHP_EOL;
}

/**
 * Syntax Alternatif
 * Selain menggunakan {}(kurung kurawal). PHP juga menyediak syntax alternative untuk menggunakan if
 * , yaitu menggunakan : (titik dua)
 * Namun untuk menggunakn ini, kita harus menggunakan kata kunci endif diakhir if statement
 */

if ($nilai >= 80 && $absen >= 80) :
  echo "Nilai Anda A " . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70) :
  echo "Nilai Anda B " . PHP_EOL;
elseif ($niali >= 60 && $absen >= 60) :
  echo "NIlai Anda C " . PHP_EOL;
elseif ($niali >= 50 && $absen >= 50) :
  echo "NIlai Anda D " . PHP_EOL;
else :
  echo "Nilai Anda E " . PHP_EOL;
endif;
