<?php

/**
 * Require dan Include
 * Saat membuat aplikasi, ada baiknya tidak dibaut dalam satu file
 * Lebih baik dipisah ke beberapa file agar kode program tidak terlalu bertumpuk di satu file
 * PHP memiliki function require dan include yang bisa kita gunakan untuk menngambil file php lain
 * Lantas apa bedanya require dan include?
 * Pada required, jika file yang kita ambil tidak ada, maka akan terjadi error dan program terhenti
 * Pada include, jike file yang kita ambil tidak ada, makan hanya akan memberi peringatan, namun program
 * akan tetap dilanjutkan
 */

// Kode: My Function.php
function sayHello(string $firstName, string $lastName): string
{
  return "Hello $firstName $lastName";
}

require "my-function.php";
echo sayName("Nanda");


/**
 * Posisi Require dan Include
 * Kode program PHP akan dibaca dari atas ke bawah, oleh karena itu pastikan posisi require dan
 * inlcude sesuai dengan yang kita inginkan
 * Misal jka sampai kita salah menempatakan posisi require dan include, bisa jadi kita malah
 * memanggil function yang beluma ada
 */

echo sayHello("Eko", "Khannedy");
include "my-function.php";
