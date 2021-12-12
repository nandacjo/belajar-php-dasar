<?php

$num = 25;
$user_input = "hallo";

if (is_int($user_input)) {
  if ($num == $user_input) {
    echo "$num is equal to $user_input";
  } else if ($num <= $user_input) {
    echo "$num is lesse than $input_user";
  } else if ($num >= $user_input) {
    echo "$num is greater than $user_input";
  }
} else {
  echo "Error loading data";
}
