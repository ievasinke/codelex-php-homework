<?php
/*
 * Write a program that reads an positive integer and
 * count the number of digits the number has.
 */

$number = (int)readline("Enter number: ");

if ($number < 0) {
    echo "Please enter a positive integer.\n";
    exit;
}

$numberAsString = (string)$number;
$numberLength = strlen($numberAsString);

echo "$number has $numberLength digit(s).\n";