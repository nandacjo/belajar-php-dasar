<?php

/**
 * Brak & Continue
 * Pada switch statement, kita sudah mengenal kata kunci break, yaitu untuk menghentikan case dalam switch
 * Sama dengan pada perulangan, break juga digunakan untuk mengentikan seluruh perulangan
 * Namun berbeda dengan continue, continue digunakan untuk mengehntikan perulangan saat ini
 * lalu melanjutkan ke perulangan selanjutnya
 */


// Kode: Break
$counter = 1;
while (true) {
  echo "Hello break : " . $counter . PHP_EOL;
  $counter++;

  if ($counter > 10) {
    break;
  }
}


// Kode Continue
for ($counter = 0; $counter <= 100; $counter++) {
  if ($counter % 2 == 0) {
    continue;
  }
  echo "Hello Continue : " . $counter . PHP_EOL;
}
