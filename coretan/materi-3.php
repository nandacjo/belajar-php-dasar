<?php

$mahasiswa = [
  [
    "nama" => "Nanda Her",
    "nim" => "28282"  
  ],
  [
    "nama" => "Budi",
    "nim" => "383838",
  ],
  [
    "nama" => "ani",
    "nim" => "39339"
  ]
];

if(count($mahasiswa) == 3){
  $mahasiswa[] = ["nama" => "Mariana", "nim" => "3332"];
}

foreach($mahasiswa as $mhs){
  echo "nama: {$mhs["nama"]}".PHP_EOL;
};

$a = [
  "first" => "Mori",
  "last" => "Her"
];

$b = [
  "first" => "Mori",
  "last" => "Her"
];

var_dump($a + $b);
var_dump($a == $b); 
var_dump($a != $b); 
var_dump($a === $b); 
var_dump($a !== $b); 

