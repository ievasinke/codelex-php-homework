<?php
/*
 * Create a array of objects that uses the function of exercise 3 but
 * in loop printing out if the person has reached age of 18.
 */

$persons = [
    [
        'name' => "John",
        'surname' => "Smith",
        'age' => 25,
    ],
    [
        'name' => 'Jane',
        'surname' => 'Doe',
        'age' => 17,
    ],
];
function reachedEighteen(array $persons): array
{
    $results = [];
    foreach ($persons as $person) {
        if ($person['age'] >= 18) {
            $results[] = "{$person['name']} {$person['surname']} is 18 or older.";
        } else {
            $results[] = "{$person['name']} {$person['surname']} is under 18.";
        }
    }
    return $results;
}

$ageLimit = reachedEighteen($persons);
foreach ($ageLimit as $item) {
    echo "$item\n";
}
