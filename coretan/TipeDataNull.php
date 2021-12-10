<?php

$name = "Nanda";
$name = null;

$age = null;

echo "Nama : ";
echo $name;
echo "\n";

echo "Umur : ";
echo $age;
echo "\n";

// isnull
echo "Is Nama Null : ";
echo is_null($name);
echo "\n";
var_dump(is_null($name));
echo "\n";


// unset
$contoh = 'Budi';
unset($contoh);

$contoh = true;
var_dump($contoh);

 
// isset = mencek apakah variable itu ada atau tidak dan tidak null
$contoh = null;
var_dump(isset($contoh));



