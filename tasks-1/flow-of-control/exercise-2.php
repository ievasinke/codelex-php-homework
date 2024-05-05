<?php

$number = (int)readline("Enter the number: ");

//todo print if number is positive or negative
if ($number < 0) {
    echo "The number is negative.\n";
} elseif ($number > 0) {
    echo "The number is positive.\n";
} else {
    echo "It is zero.\n";
}