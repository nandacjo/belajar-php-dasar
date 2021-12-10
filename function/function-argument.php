<?php

/**
 * Kita bisa mengirim informasi ke functioin yang ingin kita panggil
 * Untuk melakukan hal tersebut, kita perlu menambahkan argument atau parameter
 * di function yang duah kita buat
 * Cara membuat argument sama seperti cata membuat variable
 * Argument ditempatakn di dalam kurung () d deklarsi function
 * Argument bisa lebih dar satu, jika lebih dari satu, harus dipisah menggunakan tanda koma
 */

// Kode: Function Argument
function sayHello($name)
{
  echo "Hello $name" . PHP_EOL;
}

sayHello("Nanda Hermawansyab");
sayHello("Manis");
