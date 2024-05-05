<?php

$numberOne = (int)readline("Input the 1st number: ");
$numberTwo = (int)readline("Input the 2nd number: ");
$numberThree = (int)readline("Input the 3rd number: ");

//todo print the largest number
$largest = max($numberOne, $numberTwo, $numberThree);
echo "The largest number is: $largest\n";