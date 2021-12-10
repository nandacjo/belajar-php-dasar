<?php

/**
 * Type Declaration
 * Sama seperti variable, argumetn di PHP bisa kita masukkan data yang dinamis
 * Kadang terlalu dinamis juga menyulitkan jika ternyata kita hanya ingin membuat  function
 * yang menggunakan argument dengan tipe data tertentu
 * Untungnya di PHP, kita bisa menambhakan type data di argument, sehinnga PHP akan melakukan
 * pengecekkan ketika kita mengirim value ke function tersebut
 * JIke tipe data value tidak sesuai, maka akan terjadi error
 * Secara default PHP akan melakukan percobaan konversi tipe data secara otomatis, misal jika kita
 * menggunakan tipe int, tapi kita mengirim string, maka PHP akan otomatis mengkonversi string
 * tersebut menjadi int
 */

// Kode: Type Declaration
function sum(int $first, int $last)
{
  $total = $first + $last;
  echo "Total $first + $last = $total " . PHP_EOL;
}

sum("100", "100");
sum(100, 100);
sum(true, false);
// sum([], []);
