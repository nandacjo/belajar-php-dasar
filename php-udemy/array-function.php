<?php

$numbers = [1, 2, 3];
array_push($numbers, 4); // menambah array di akhir
array_pop($numbers); // mengahapus data array di akhir

array_unshift($numbers, 100); // menambah data di awal array
array_shift($numbers); // menghapus data array pertama

var_dump($numbers);

$num1 = [1, 3, 5];
$num2 = [2, 4, 6];
$num3 = array_merge($num1, $num2);
var_dump($num3);

$abjad = ['A', 'C', 'E', 'B', 'D'];
sort($abjad);
var_dump($abjad);

rsort($abjad);
var_dump($abjad);
