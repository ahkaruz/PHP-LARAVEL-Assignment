<?php
function forLoopPrintEvenNumbers($start, $end, $step)
{
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}

forLoopPrintEvenNumbers(2, 20, 2);
echo "\n";
function whileorLoopPrintEvenNumbers($start, $end, $step)
{
    while ($start <= $end) {
        echo $start . " ";
        $start += $step;
    }
}
whileorLoopPrintEvenNumbers(2, 20, 2);
echo "\n";
function do_whileLoopPrintEvenNumbers($start, $end, $step) {
    do {
        echo $start . " ";
        $start += $step;
    } while ($start <= $end);
}
do_whileLoopPrintEvenNumbers(2, 20, 2);
?>
