<?php
/*
 * Create a person object with name, surname and age.
 * Create a function that will determine if the person has reached 18 years of age.
 * Print out if the person has reached age of 18 or not.
 */

$person = [
    'name' => "John",
    'surname' => "Smith",
    'age' => 25,
];
function reachedEighteen(int $age): string
{
    if ($age >= 18) {
        return "The person is 18 or older.";
    }
    return "The person is under 18.";
}

echo reachedEighteen($person['age']);

