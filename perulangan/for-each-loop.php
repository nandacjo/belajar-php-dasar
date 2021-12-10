<?php

/**
 * For Each
 * Kadadng kita biasa mengakse data array menggunakan perulangan
 * Mengakses data array menggunakan perulangan sangat bertele-tele. Kita harus membuat conter,
 * lalau mengakses array menggunakan counter yang kita buat
 * Namun untungnya, di PHP terdapat perualngan for each, yang bisa digunakan untuk mengakses 
 * seluruh data di Array otomatis
 */

// Kode : Tanpa For Each
$names = ["Eko", "Kurniawasn", "Khannedy"];

for ($i = 0; $i < count($names); $i++) {
  echo "Hello $names[$i]" . PHP_EOL;
}


// Kode : Menggunakan For Each
foreach ($names as $name) {
  echo "Hy, Hello $name " . PHP_EOL;
}


// Kode : For Each denga Key
$person = [
  "first_name" => "Nanda",
  "middle_name" => "Hermawansya",
  "last_name" => "Pasaribu"
];

foreach ($person as $key => $value) {
  echo "$key : $value" . PHP_EOL;
}
