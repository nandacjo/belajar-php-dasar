<?php

/**
 * String Function
 * Sebelumnay saya pernah menggunakan beberapa functo bawwan dari PHP untuk memanipulasi
 * data string.
 * Sebenarnya banyak sekali function bawaan PHP yanb bisa kita gunakan untuk memanipulasi string
 * https://www.php.net/manual/en/ref.strings.php
 */

// Kode: String Function
var_dump(join(",", [1, 2, 3, 4, 5]));
var_dump(explode(" ", "Eko Kurniawan Khannedy"));
var_dump(strtolower("EKO KURNIAWAN KHANNEDY"));
var_dump(strtoupper(("eko kurniawans khannedy")));
var_dump(trim("       Eko      "));
var_dump(substr("Eko Kurniawan Khannedy", 14, 8));
