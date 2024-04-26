<?php

/*
 * Write a program to produce the sum of 1, 2, 3, ..., to 100.
 * Store 1 and 100 in variables lower bound and upper bound,
 * so that we can change their values easily.
 * Also compute and display the average.
 * The output shall look like:
 * The sum of 1 to 100 is 5050
 * The average is 50.5
 */

$minValue = 1;
$maxValue = 100;
$items = range($minValue, $maxValue);
$itemsSum = array_sum($items);
$itemsCount = count($items);
$itemsAverage = $itemsSum / $itemsCount;

echo "The sum of $minValue to $maxValue is $itemsSum\n";
echo "The average is $itemsAverage";



