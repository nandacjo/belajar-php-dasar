<?php

/**
 * Function
 * Function adalah block kode program yang akan berjalan saat kita panggil 
 * Sebelmnya kita sudah menggunkan function isset(), count(), dan lain-lain
 * UNtuk membuat function di PHP, kita bisa menggunkan kata kunci funcction
 * lalu diikuiti dengan nama function, kurung (), dan diakhiri dengan boloc
 * Kita bisa memanggil function dengan menggunakan nama function lalu diikuti
 * dengan tanda kurung ()
 * Di bahasa pemrograman lain, function juga disebut dengan method
 */

// Kode: Function
function sayHello()
{
  echo "Hello Function" . PHP_EOL;
}

sayHello();
sayHello();


/**
 * Lokasi Function
 * PHP sangat flexible dalam pembuatan function
 * Tidak seperti pada bahasa pemrograman lain yang harus ada aturan lokasi dimana
 * membuat function
 * Di PHP kita bebas membuat function dimanapun, bisa di dalam if statement,
 * di dalam function dan sebagainya
 * Namun perlu diingat, jika kode function yang belum dieksekusi oleh PHP, maka
 * function tersebut tidak akan bisa digunakan
 */

// Kode : Lokasi Function
$buat = true;
if ($buat) {
  function hi()
  {
    echo "HI Nanda Hermawansyah" . PHP_EOL;
  }
}

hi();

$name = "Nanda";

function sayName()
{
  global $name;
  echo "Hallo $name";
}

sayName();
