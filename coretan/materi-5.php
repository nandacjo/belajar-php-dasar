<?php

$nilai = 12;
$absen = 12;

if ($nilai > 80 && $absen > 80) {
  $result = "A";
} elseif ($nilai >= 70 && $absen <= 80) {
  $result = "B";
} else {
  $result = "C";
}

switch ($result) {
  case "A":
    say($result);
    break;
  case "B":
    say($result);
    break;
  default: {
      say($result);
    }
}

function say(string $values)
{
  if ($values == "A") {
    echo "selamat anda lulus dengan sangat baik-baik";
  } elseif ($values == "B") {
    echo "selamat anda lulus dengan baik";
  } else {
    echo "mungkin anda salah jurusan";
  }
}
