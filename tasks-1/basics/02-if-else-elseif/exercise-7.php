<?php

/*
 * Create a variable $number with an integer of your choice.
 * Determine whether the value is "low" (under 50),
 * "medium" (between 51 and 100, inclusive), or
 * "high" (greater than 100).
 */

$number = 42;

if ($number < 50) {
    echo 'low';
} elseif ($number >= 50 && $number <= 100) {
    echo 'medium';
} else {
    echo 'high';
}