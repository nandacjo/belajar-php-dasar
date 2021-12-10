<?php
// tipe data constant
const APLIKASI = "Jasa Lubed Switct";
const app = "Facebook";

echo APLIKASI.PHP_EOL;
echo app;

echo (PHP_EOL);

var_dump(APLIKASI);

// tipe data null
$name = null;
$name = "Adi";
$name = null;
unset($name); // menghapus variable

$names = "lora";
var_dump(is_null($names));

$price = 10000;
var_dump(isset($price));

// tipe data Array
$values = array(12, 34, 32, 4.3);
var_dump($values[0]);

$names = ["adi", "budi", "melati"];
$names[0] = "Alia";
$names[] = "Mariani";
var_dump($names[3]);
var_dump($names[0]);

unset($names[3]);
var_dump($names[3]);
var_dump(count($names));

$person = [
    [
        "name" => "Nanda",
        "nim" => "181921",
    ],
    [
        "name" => "budi",
        "nim" => "332233",
    ],
    [
        "name" => "Meka",
        "nim" => "33222329",
    ]

];

var_dump($person[0]["name"]);
var_dump($person[1]["nim"]);


