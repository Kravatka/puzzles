function findMissing($list) {
    $diff_old = $list[1] - $list[0];

    for ($i = 0; $i < count($list) - 1; $i++) {
        $diff = $list[$i + 1] - $list[$i];
      
        if ($diff == $diff_old + $diff_old) {
           return $list[$i] + $diff_old;
        } else if ($diff + $diff == $diff_old) {
           return $list[$i] - $diff;
        }
      
        $diff_old = $diff;
    }
}
