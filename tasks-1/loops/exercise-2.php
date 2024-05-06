<?php

$number = (int)readline("Input number of terms: ");
$result = 1;

//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function
if ($number <= 0) {
    echo "Error. Enter a positive number.";
    exit;
}
for ($i = 0; $i < $number; $i++) {
    $result *= $number;
}
echo "$number raised to the power of $number is $result.\n";