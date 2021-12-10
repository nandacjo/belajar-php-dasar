<?php

echo 'Nama : ';
echo 'Nanda Hermawansyah';

// double quote
echo "\n";

echo "Nama : ";
echo "Eria Safitiri";

echo "\n";

// escape sequence
echo "Nama : ";
echo "Nanda \t Hermawansyah \t Pasaribu \n";

// Multinline string
// Heredco
echo <<<NANDA
Ini adalah contoh string yang sanat
panjang, dan juga gak perlu ngetik ENTER secara
manual, "bisa quote" juga
NANDA;

// Nowdoc
echo <<<'ERIA'
Ini adalaah contoh string yang sangat 
panjang, dan juga gak perlu ngeti ENTER secara
manual, "bisa quote" juga
ERIA;

$nama_siswa = "James Bond";
$nama_guru = "Nanda";

echo "\n";
$gelar = "Nanda Hermawansyah";
echo explode(" ", $gelar);
