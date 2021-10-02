<?php

function validBraces($braces) {
  $opened = array();

  foreach (str_split($braces) as $char) {
      if (in_array($char, str_split('([{'))) {
          $opened[] = $char;
      }

      else if ($char == ')') {
          if (array_pop($opened) !== '(') {
              return false;
          }
      }
      else if ($char == ']') {
          if (array_pop($opened) !== '[') {
              return false;
          }
      }
      else if ($char == '}') {
          if (array_pop($opened) !== '{') {
              return false;
          }
      }
  }

  return count($opened) == 0;
}
