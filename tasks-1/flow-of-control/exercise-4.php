<?php
/*
 * Write a program which prints “Sunday”, “Monday”, ... “Saturday”
 * if the int variable "dayNumber" is 0, 1, ..., 6, respectively.
 * Otherwise, it shall print "Not a valid day" .
 * use:
 * * a "nested-if" statement
 * * a "switch-case-default" statement .
 */

$dayNumber = [
    0 => "Sunday",
    1 => "Monday",
    2 => "Tuesday",
    3 => "Wednesday",
    4 => "Thursday",
    5 => "Friday",
    6 => "Saturday",
];

$inputNumber = (int)readline("Enter a number from 0 to 6: ");

if ($inputNumber == 0) {
    echo $dayNumber[0] . PHP_EOL;
} elseif ($inputNumber == 1) {
    echo $dayNumber[1] . PHP_EOL;
} elseif ($inputNumber == 2) {
    echo $dayNumber[2] . PHP_EOL;
} elseif ($inputNumber == 3) {
    echo $dayNumber[3] . PHP_EOL;
} elseif ($inputNumber == 4) {
    echo $dayNumber[4] . PHP_EOL;
} elseif ($inputNumber == 5) {
    echo $dayNumber[5] . PHP_EOL;
} elseif ($inputNumber == 6) {
    echo $dayNumber[6] . PHP_EOL;
} else {
    echo "Not a valid day\n"; // Default case for invalid input
}

$switchNumber = (int)readline("Enter number 0 - 6: ");

switch ($switchNumber) {
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
        echo $dayNumber[$switchNumber] . PHP_EOL;
        break;
    default:
        echo "Not a valid day\n";
        break;
}
