<?php

$values = array(10, 4, 31.3);
var_dump($values);

$names = ["Nanda", "Hermawansyah", "Pasaribu"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Malika";
var_dump($names[0]);

//menambah array kebelakang
$names[] = "Kurnia";
var_dump($names);

// menambah data array berdasarkanindex
$names[7] = "Buaya darat";
var_dump($names
);

// menghitung jumlah array
var_dump(count($names));

// Map pada array
$nanda = array(
  "id" => "1",
  "name" => "Nanda Hermawansyah",
  "age" => 24
);

var_dump($nanda);

$rama = [
  "id" => "1",
  "name" => "Ramadahnti",
  "age" => 22,
];

var_dump($rama);