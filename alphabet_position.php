<?php

function alphabet_position(string $s): string {
    $positions = [];
    $alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];

    $char_array = str_split(strtolower($s));
    $alpha_flip = array_flip($alphabet);

    foreach($char_array as $char) {
        if (array_key_exists($char, $alpha_flip)) {
            $positions[] = $alpha_flip[$char] + 1;
        }
    }

    return implode(' ', $positions);
}
