<?php

function likes( $names ) {
  $countNames = count($names);
  $sufix = " like this";
  $multi_sufix = " likes this";
  
  switch($countNames){
    case 0: return 'no one' . $multi_sufix; break;
    case 1: return $names[0] . $multi_sufix; break;
    case 2: return $names[0] . ' and ' . $names[1] . $sufix; break;
    case 3: return $names[0] . ', ' . $names[1] . ' and ' . $names[2] . $sufix; break;
    default: return $names[0] . ', ' . $names[1] . ' and ' . ($countNames - 2) . ' others' . $sufix;
  }
}
