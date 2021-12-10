<?php

/**
 * Variable Function
 * PHP mendukunt konsep yang bernama variable function
 * Variable function adalah kemampuan memanggil sebuah function dari value yang terdapat di
 * sebuah Variable
 * Untuk mengggunakan variabel function, kita bisa secara langsung memanggil $namaVariable(), jika
 * ingin menambahkan argumnet, kita bisa menggunakan $namaVariable(argument)
 */

// Kode: Variable Function
function foo()
{
  echo "FOO" . PHP_EOL;
}

function bar()
{
  echo "BAR" . PHP_EOL;
}

$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();

// Kode: Penggunaan Variable Function
function sayHello(string $name, $filter)
{
  $finalName = $filter($name);
  echo "Hello $finalName " . PHP_EOL;
}

sayHello("Eko", "strtoupper");
sayHello("Eko", "strtolower");
