<?php

function area(int $r) {
    return 3.14 * $r * $r;
}
// echo area(1);

function maximum(int ...$nums): int {
    $max = $nums[0];
    foreach ($nums as $num) {
        if ($num > $max) {
            $max = $num;
        }
    }
    return $max;
}
// echo maximum(0, -3, 10, 7);
