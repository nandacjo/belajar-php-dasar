<?php

/**
 * Anonymous Function
 * Anonymous Function adalah function tanpa nama, di PHP diesebut juga dengan Closure
 * Anonymous function biasanya digunakan sebagai argument atau sebaga value di variable
 * Anonymous function membuat kita bisa mengirim function sebagai argument di function lainnya
 * 
 */

// Kode: Anonymous function
$sayHello = function (string $name) {
  echo "Hello $name" . PHP_EOL;
};

$sayHello("Eko");
$sayHello("Budi");

// Kode: Anonymus Function sebagai argument
function sayGoodBye(string $name, $filter)
{
  $finalName = $filter($name);
  echo "Good Bye $finalName " . PHP_EOL;
}

sayGoodBye("Eria", function (string $name) {
  return strtoupper($name);
});

/**
 * Mengakses Variable di Luar Closure
 * Secara default, anonymous function tidak bisa mengakses variable yang terdapat diluar function
 * Jikat kita ingin menggunakan variable yang terdapat diluar anonymous function, kita perlu
 * explicit menyebutkannya menggunakan kata kunci use lalu diikuti variable-variable yang ingin kita 
 * gunakan
 * 
 */

// Kode: Menagkases Variable Luar
$firstName = "Eko";
$lastName = "Khannedy";
$alamat = "Jakarat";

$sayHelloEko = function () use ($firstName, $lastName) {
  echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloEko();



















// Latihan
function filter(string $name)
{
  if (strtolower($name) == "anjing") {
    return "*******";
  } else {
    return "$name";
  }
}


function sayHelloEria(string $name, $filter)
{
  $finalName = $filter($name);
  echo "Hallo, $finalName" . PHP_EOL;
}

sayHelloEria("Anjing", "filter");
