<?php

$a = 100;
$b = (string)$a;
$c = (int)$b;
var_dump($c);
var_dump($c + 4.14);

$phi = 3.14;
$stringphi = (string)$phi;
var_dump($stringphi);

$names = ["nanda", "budi", "niko", "neo"];

foreach($names as $nm){
  if($nm[0] == "n"){
    echo "Selamat anda lulus".PHP_EOL;
  }
}