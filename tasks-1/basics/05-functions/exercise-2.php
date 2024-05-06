<?php
/*
 * Create a function that accepts 2 integer arguments.
 * First argument is a base value and the second one is a value its been multiplied by.
 * For example, given argument 10 and 5 prints out 50
 */
function multiply(int $base, int $multiplier): int
{
    return $base * $multiplier;
}

$baseValue = (int)readline("Enter a base value: ");
$multiplier = (int)readline("Enter multiplier: ");
$result = multiply($baseValue, $multiplier);
echo "The result of multiplying $baseValue by $multiplier is $result.\n";