<?php

/*
 * Create a variable $plateNumber that stores your car plate number.
 * Create a switch statement that prints out that its your car in case of your number.
 */

$plateNumber = 'AA1234';

switch ($plateNumber) {
    case 'AA1234':
        echo "It is my car.";
        break;
    default:
        echo "It is not my car.";
}