<?php

/**
 * Ternary Operator
 * Kadang ada kasus kita butuh melakukan pengecekan kondis menggunakan if statement lalu jika
 * benar kita ingin memberi nilai terhadap variable dengan nilai X dan jka salah dengan nilai Y
 * Penggunaan if statement pada kasus seperti itu bisa dipersingkat menggunakan ternary operator
 * Ternary operator menggukana kata kunci ? dan :
 */

// bukan ternary operator
$gender = "PRIA";
$hi = null;

if ($gender = "PRIA") :
  $hi = "Hi Bro";
else :
  $hi = "Hi Nona";
endif;

echo $hi . PHP_EOL;

// menggunakan ternary operator
$gender = "WANITA";
$hi = $gender == "WANITA" ? "Hi Nona" : "Hi Bro";

echo $hi . PHP_EOL;
