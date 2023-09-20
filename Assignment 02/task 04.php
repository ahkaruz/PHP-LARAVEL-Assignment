<?php
function printFibonacci($n)
{
    $a = 0;
    $b = 1;
    for ($i = 0; $i < $n; $i++) {
        echo $a . " ";
        $temp = $a;
        $a = $b;
        $b = $temp + $a;
    }
}
printFibonacci(15);
