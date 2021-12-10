<?php

$username = [
  "nama" => "nani",
  "gender" => "male"
];


$login = $username["nama"] == "nani" && $username["gender"] == "male" ? "nona" :  "bro";

var_dump($login);

$person = [];

$action = $person["adi"] ?? "Nothing";
var_dump($action);
