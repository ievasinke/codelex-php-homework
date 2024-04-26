<?php
/*
 * Given variable (int) 50 create a condition that prints out "correct" if the variable is inside the range.
 * Range should be stored within the 2 separated variables $y and $z.
 */

$luckyNumber = 50;
$minValue = 42;
$maxValue = 108;

if ($luckyNumber >= $minValue && $luckyNumber <= $maxValue) {
    echo "correct";
} else {
    echo "incorrect";
}