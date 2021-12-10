<?php

/**
 * Goto Operator
 * 
 * Salah satu fitur yang sebenarnya jarang sekali digunakan di PHP adalah goto operator
 * Kenapa jarang digunakan karena terlalu banyak menggunakan goto operator, kode program aplikasinya
 * akan mudah membingungkan yang membaca kodena
 * goto adalah fitur dimana kita bisa loncat ke kode program sesuai dengan keinginan kita
 * Agar goto bisa loncat ke kode program, kita harus membuat label di php dengan menggunakan nama label
 * lalu di akhiri : (colon)
 * 
 */

// Kode : Goto Operator
goto a;
echo "Hello A" . PHP_EOL;

a:
echo "Hello B" . PHP_EOL;


// Kode : goto operator di Loop
$counter = 1;
while (true) {
  echo "While Loop $counter" . PHP_EOL;
  $counter++;
  if ($counter > 10) {
    goto end;
  }
}

end:
echo "End Loop";
