<?php

function persistence(int $num): int {
  if ($num < 10) return 0;

  $count = 1;

  $number = array_product(str_split($num));

  while ($number >= 10) {
      $number = array_product(str_split($number));
      $count++;
  }

  return $count;
}
