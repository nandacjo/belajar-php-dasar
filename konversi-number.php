<?php

/**
 * Kadang kita sering melakukan konversi tipe data dari string ke number (int / float) atau sebaliknya
 * di PHP untuk melaukukan konversi cukup mudah, kita hanya perlu menggunakan tanda kurung (tipe data)
 * tipe data untuk string adalah stirng, untuk number bisa menggunakan int untuk integer dan float untuk flaoting poin
 */
$valueString = (string) 100;
var_dump($valueString);

$valueInt = (int) "100";
var_dump($valueInt);

$valueFloat = (float) "100.11";
var_dump($valueFloat);
