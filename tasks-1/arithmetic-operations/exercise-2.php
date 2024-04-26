<?php
/*
 * Write a program called CheckOddEven which prints "Odd Number"
 * if the int variable “number” is odd, or “Even Number” otherwise.
 * The program shall always print “bye!” before exiting.
 */
$number = 42;
function CheckOddEven($number)
{
    if ($number % 2 == 0) {
        echo "Even Number\n";
    } elseif ($number % 2 == 1) {
        echo "Odd Number\n";
    }
    echo "bye!";
};

CheckOddEven($number);