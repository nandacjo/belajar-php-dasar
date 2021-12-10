<?php

/**
 * Arrow Function 
 * Arrow function diperkenalkan di PHP 7.4 sebagai alternativ anonymous function yang lebih sederhana pembuatannya
 * Secar garis besar, sebenarnya arrow function dan anonymous function adalah dua hal yang sama 
 * Hal yang membedakan di arrow function adalah, sedara otomatis variable di luar closure bisa
 * dibunakan, tidak seperti di anonymous yang harus disebutkan secara manual
 * menggunakan kata kunci use
 * Pembuatan arrow function tidak menggunkan kata kunci function, melainkan fn
 * Arrow function di khususkan untuk pembuatana function yang sederhana
 */

// Kode: Arrow Function
$firstName = "Eko";
$lastName = "Khannedy";

$sayHello = fn () => "Hello $firstName $lastName" . PHP_EOL;


echo $sayHello();
