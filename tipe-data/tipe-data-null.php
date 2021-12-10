<?php

$name = "Eko";
$name = NULl;

$age = null;

// isnull
$isNull = is_null($name);
var_dump($isNull);

// unsedt dan isset
$value = "eko";
unset($value);
var_dump(isset($value));

$value = "nanda";
var_dump(isset($value));
