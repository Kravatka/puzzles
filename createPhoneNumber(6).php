<?php

function createPhoneNumber($numbersArray) {
  $string = '(';
  
  for($i = 0; $i < count($numbersArray); $i++) {
    if ($i == 2) {
      $string .= $numbersArray[$i] . ') ';
    } elseif ($i == 5) {
      $string .= $numbersArray[$i] . '-';
    } else {
      $string .= $numbersArray[$i];
    }
  }
  
  return $string;
}
