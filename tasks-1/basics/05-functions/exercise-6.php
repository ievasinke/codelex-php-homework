<?php
/*
 * Create an non-associative array with 5 elements where 3 are integers,
 * 1 float and 1 string. Create a for loop that iterates non-associative array
 * using php in-built function that determines count of elements in the array.
 * Create a function that doubles the integer number.
 * Within the loop using php in-built function
 * print out the double of the number value (using your custom function).
 */

$items = [11, 42, 1.5, 'Hello World!', 101];

function doubleInteger(int $number): int
{
    return $number * 2;
}
foreach ($items as $item) {
    if (is_int($item)) {
        $doubleValue = doubleInteger($item);
        echo "The double of $item is $doubleValue\n";
    }
}