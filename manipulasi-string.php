<?php

/**
 * 
 * dot oeprator
 * Dot (titik) operator adalah operator yanb bisa kita guanakn
 * untuk menambahkan string dengan data lain ( bisa string atau data laiinya)
 * Sebenarnya kita bisa menggunakan + (plus) untuk menambahkan string
 * namun jika kita oca tambhakan string dengan tipe data number, makan akan terjadi error. 
 * Oleh karena itu direkomenasikan menggunakan . (dot) untuk menambahkan string dengan data lainnya
 */

$name = "Nanda Hermawansyah";

echo "Nama : " . $name . PHP_EOL;
echo "Nilai : " . 100 . "\n";

/**
 * Mengakses Karakter
 * String di PHP seperti array karakter, diamana kita bisa mengakses data tiap karakternya
 * menggunakan kurung siku
 * Sasma seperti di aray, index pertama dimulai dari0
 * Jika kita mengakses index melebihi karakter di string, makan akan terjadi error
 * 
 * */

$nama = "Budi";
echo $nama[0] . PHP_EOL;
echo $nama[1] . PHP_EOL;
echo $nama[2] . PHP_EOL;
echo $nama[3] . PHP_EOL;


/**
 * Variable Parsing
 * Khusus String menggunakan double quote atau heredoc, kita bisa menggunakan karakter $ untuk mengakses
 * vairable.
 * Ini memudahkan ketika kia ingin menggabungkan string dengan variable
 * Cara penggunaannya adalh dengan menggunakan karakter $ lalu diikuti dengan nama variable nya.
 */

$firstName = "Nanda";
echo "Hallo $name, Selamat Belajar PHP dasar" . PHP_EOL;


/**
 * Curly Brace
 * Kadang kita butuh menggabungkan variable dengan string tanap ada spasi. Hal ini akan menyulitkan
 * jika hanay menggunakan variable parsing
 * Untungnya di PHP kita bisa menambahkan kurung kurawal sebelum menggunakan variable parsing
 * 
 */

$var = "var";
echo "This is {$var}s " . PHP_EOL;
