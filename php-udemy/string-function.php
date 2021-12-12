<?php

$text1 = "first text";
$text2 = "SECOND TEXT";

$text3 = $text1 . "  ";
$text3 .= $text2;

echo $text3 . PHP_EOL;
echo strtoupper($text1) . PHP_EOL;
echo strtolower($text2) . PHP_EOL;
echo ucfirst($text3) . PHP_EOL;
echo ucwords($text3) . PHP_EOL;

echo strlen($text3) . PHP_EOL;
echo trim($text3) . PHP_EOL;
echo strstr($text3, strtoupper("second")) . PHP_EOL;
echo str_replace("text", "Hello", $text3) . PHP_EOL;
