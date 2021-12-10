<?php

$values = array(1, 2, 3, 4, 5);
var_dump($values);

$names = [
  "Nanda", "Eko", "Sasuke"
];
var_dump($names);

// Operasi Array
var_dump($names[0]);
$names[0] = "Budi";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Naruto";
var_dump($names);

var_dump(count($names));


// Array sebagai Map
$eko = array(
  "id" => "eko",
  "name" => "Eko Kurniawan",
  "age" => 30
);

var_dump($eko["id"]);
var_dump($eko["name"]);
var_dump($eko["age"]);


$budi = [
  "id" => "budi",
  "name" => "Budi Nugraha",
  "age" => 23
];

var_dump($budi["id"]);
var_dump($budi["name"]);
var_dump($budi["age"]);


// aray di dalam array
$eria = array(
  "id" => "eria",
  "name" => "Eria Safitiri",
  "age" => 22,
  "address" => [
    "city" => "indralaya",
    "coutnry" => "Indonesia",
  ]
);

var_dump($eria["address"]["city"]);

echo "\n";


$fans_bts = ["Asrul Harahap", "Anis Fikriyyah", "M. Rifky Hilman", "Ghazala Tisha Harahap", "Martinus Putra"];

echo $fans_bts[0];
// Asrul Harahap
echo $fans_bts[3];
// Ghazala Tisha Harahap


$point_game = [];
$point_game[0] = 10;
$point_game[1] = 15;
$point_game[2] = 5;
$point_game[3] = 20;
$point_game[4] = 10;


$lis_buah = ["Apel", "Jeruk", "Pisang"];
unset($lis_buah[1]);



$profile = [
  "nim" => "1306578",
  "nama" => "Asrul Harahap",
  "alamat" => "Bogor, Jawa Barat"
];
echo $profile['nama'];
// Asrul Harahap


$matriks = [
  [1, 2],
  [3, 4],
  [5, 6]
];
echo $matriks[0][1];
// 2
echo $matriks[2][0];
// 5
echo $matriks[1][1];
// 4

echo "\n";
