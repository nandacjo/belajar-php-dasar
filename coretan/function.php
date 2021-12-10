<?php



function login($username, $password)
{

  $user = [
    
      "username" => "nandacoje22",
      "password" => '12345',
    
  ];


  if ($user["username"] !== $username && $user["password"] !== $password) {
    echo "Maaf password atau kata sandi anda salah";
  } else {
    echo "Selamat anda berhasil login";
  }
}

login("nandacoje22", 12345);