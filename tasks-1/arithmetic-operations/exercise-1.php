<?php

/*
 * Write a program to accept two integers and
 * return true if the either one is 15 or if their sum or
 * difference is 15.
 */

$firstValue = 3;
$secondValue = 42;

$sum = $firstValue + $secondValue;
$difference = abs($firstValue - $secondValue);

$isFifteen = ($firstValue == 15 || $secondValue == 15 || $sum == 15 || $difference == 15);

if ($isFifteen) {
    echo "true";
} else {
    echo "false";
}
