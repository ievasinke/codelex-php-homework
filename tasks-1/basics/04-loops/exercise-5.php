<?php
/*
 * Create an associative array with objects of multiple persons.
 * Each person should have a name, surname, age and birthday.
 * Using loop (by your choice) print out every persons personal data.
 */

$items = [
    [
        "name" => "Mark",
        "surname" => "Williams",
        "age" => 13,
        "birthday" => "2011-02-18",
    ],
    [
        "name" => "Anna",
        "surname" => "Jones",
        "age" => 21,
        "birthday" => "2002-10-11",
    ],
    [
        "name" => "Alex",
        "surname" => "Smith",
        "age" => 49,
        "birthday" => "1974-08-19",
    ]
];

foreach ($items as $item) {
    echo "{$item['name']} {$item['surname']} is {$item['age']} years old and was born on {$item['birthday']}.\n";
}
