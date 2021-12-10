<?php

/**
 * Return Type Declaration
 * Sama seperti pada argument, pada return value pun kita bisa mendeklarasiian tipe datanya
 * Hal ini selain mempermudah kita ketika membaca tipe data kembalian function, bisa juga
 * digunakan untuk menjaga jangan sampai kita mengembalikan tipe data yang salah di dunction
 * Untuk mendeklarasikan tipe data kembalina function, setelah kurung () kita bisa tambahkan :
 * diikuti tipe data kembaliannya
 */

// Kode: Return Type Declration (1)
function sum(int $first, int $second): int
{
  return $first + $second;
}

$total = sum(10, 10);
var_dump($total);


// // Kode: Return Type Declaration (2)
function getFinalValue(int $value): string
{
  if ($value >= 80) {
    return "A";
  } elseif ($value >= 70) {
    return "B";
  } elseif ($value >= 60) {
    return "C";
  } elseif ($value >= 50) {
    return "D";
  } else {
    return "Mungkin anda salah jurusan";
  }
}

$hasil = getFinalValue(80);
var_dump($hasil);
