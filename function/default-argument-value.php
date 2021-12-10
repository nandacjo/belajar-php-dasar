<?php

/**
 * Default Argument Value
 * PHP mendukung default argument value
 * Fitur ini memungkinkan jika ketika kita memanggila function tidak memasukkan
 * paramerter, kita bisa mementukan data default nya apa
 */

// Kode:  Default Argument Value
function sayHello($name = " Anonymouts ")
{
  echo "Hello $name" . PHP_EOL;
}

sayHello();
sayHello("Nanda Aja");


/**
 * Kesalahan Default Argument Value
 * Defautl argument value bisa disimpan argument manapun
 * Namun jika argument lebih dari satu, dan kita menyimpan default argument value di
 * parameter awal, maka itu kurang berguna
 */

// Kode: Kesalahan Default Argument Value
function sayHelloo($firstName = "Nanda", $lastName = "Her")
{
  echo "Hello $firstName $lastName" . PHP_EOL;
}

sayHelloo("Hermawansyah");
