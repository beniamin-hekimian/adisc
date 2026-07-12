<?php

// if-else
$i = 1;
if ($i == 0) {
    echo "i equals 0";
} elseif ($i == 1) {
    echo "i equals 1";
} else {
    echo "i is neither 0 nor 1";
}

// for
for ($i = 0; $i < 10; $i++) {
    echo $i;
}

// foreach array
$array = [1, 2, 3];
foreach ($array as $value) {
    echo $value;
}

// foreach associative array
$assocArray = ['a' => 1, 'b' => 2, 'c' => 3];
foreach ($assocArray as $key => $value) {
    echo "$key equals $value";
}

// switch
$i = 1;
switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
}

// while
$i = 1;
while ($i <= 10) {
    echo $i++;
}

// while-endwhile
$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;

// do-while
$i = 0;
do {
    echo $i;
} while ($i > 0);
