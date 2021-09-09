<?php

function uniqueInOrder($iterable) {
    $arr = [];
    $params = $iterable;

    if (!is_array($params))
        $params = str_split($iterable);

    for ($i = 0; $i < count($params); $i++) {
        if ($iterable[$i] !== $iterable[$i + 1])
            $arr[] = $iterable[$i];
    }

    return $arr;
}
