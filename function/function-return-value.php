<?php

/**
 * Function Return Value
 * Secara default, function itu tidak mengahsilkan value apapun, namun jika kita ingin, kita bisa
 * membuat sebuah function mengembalikan nilai
 * Dan di dalam block function, untuk menghasilkan nilai tersebut, kita harus menggunakan kata
 * kuncti return, lalu diikuti dengna data yang ingin dihasilkan
 * Kita hanya bisa menghasilkan 1 data di sebuah function, tidak bisa lebih dari satu
 * 
 */


// Kode: Function Return Value (1);
function sum(int $first, int $second): int
{
  return $first + $second;
}

$total = sum(10, 10);
var_dump($total);

$total = sum(20, 20);
var_dump($total);


// Kode: Function Return Value (2)
function getFinalValue(int $value): string
{
  if ($value >= 80) {
    return "A";
  } else if ($value >= 70) {
    return "B";
  } elseif ($value >= 60) {
    return "C";
  } else if ($value >= 50) {
    return "D";
  } else {
    return "E";
  }
}

$hasil = getFinalValue(80);
var_dump($hasil);
