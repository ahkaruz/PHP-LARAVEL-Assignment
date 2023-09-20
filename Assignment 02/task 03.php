<?php
$a = 0;
$b = 1;
$count = 0;
while ($count < 10) {
    $temp = $a;
    $a = $b;
    $b = $temp + $a;

    if ($a > 100) {
        break;
    }

    echo $a . " ";
    $count++;
}
