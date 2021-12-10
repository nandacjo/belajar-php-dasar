<?php

$nama = "Nanda";

$nama = null;
var_dump($nama);

$age = null;
var_dump($age);

$age = true;

$cekDataNull = is_null($age);
var_dump($cekDataNull);

$kambing = "3";
unset($kambing);

var_dump($kambing);

$a = 'a';
// unset($a);

var_dump($a);
isset($a);
var_dump(isset($a));

// tipe data array
$names = array("Buudi", "Meka");

var_dump($names[0]);

$names[] = ["Mulan", "rio"];
var_dump($names);

unset($names[0]);
var_dump($names);

$person = [
  "nama" => "Nanda",
  "umur" => "24 tahun",
];

var_dump($person);