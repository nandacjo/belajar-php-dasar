<?php

/**
 * Array Function
 * Di PHP juga terdapat banyak sekali function bawaan yang bisa kita gunakan untuk memanipulasi data Array
 * https://www.php.net/manual/en/ref.array.php
 */

// Kode: Array Function
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$values = [2, 4, 6, 8];

var_dump(array_map(fn ($data) => $data * 2, $values));

sort($data);
rsort($data);

var_dump(array_keys($data));
var_dump(array_values($values));
