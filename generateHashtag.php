<?php

function generateHashtag($str) {
  if (trim($str) === '') return false;

  $arr = explode(' ', $str);

  $string = '#'.trim(implode(array_map(function($word) {
        return ucfirst($word);
    }, $arr)));
  
  return strlen($string) > 140 ? false : $string;
}
