<?php

/**
 * Callback Function
 * Callback adalah sebuah mekanisme sebuah function memanggil function lainnya sesuai dengan yang diberikan argument
 * Hal ini sebenarnya sudah kita lakukan di Materi Variable Function dan Anonymous Function
 * Namun di PHP ada cara lain untuk implementasi callback, yaitu menggunakan tipe data callable
 * Dan untuk memanggil callback function tersebut, kita bisa menggunakan function
 * call_user_fun(callable, arguments);
 */

// Kode: Callack Function
function sayHello(string $name, callable $filter)
{
  $finalName = call_user_func($filter, $name);
  echo "Hello $finalName " . PHP_EOL;
}

sayHello("Eko", function ($name) {
  return strtoupper($name);
});
sayHello("Budi", fn ($name) => strtolower($name));
sayHello("Eria", "strtoupper");
sayHello("Nanda", "strtolower");
