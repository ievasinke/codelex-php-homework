<?php
/*
 * Write a program called coza-loza-woza.php
 * which prints the numbers 1 to 110, 11 numbers per line.
 * The program shall print "Coza" in place of the numbers which are multiples of 3,
 * "Loza" for multiples of 5, "Woza" for multiples of 7,
 * "CozaLoza" for multiples of 3 and 5, and so on.
 * The output shall look like:
 * 1 2 Coza 4 Loza Coza Woza 8 Coza Loza 11
 * Coza 13 Woza CozaLoza 16 17 Coza 19 Loza CozaWoza 22
 * 23 Coza Loza 26 Coza Woza 29 CozaLoza 31 32 Coza
 */

$numbers = range(1, 110);
$counter = 0;

foreach ($numbers as $number) {
    $output = "";
    if ($number % 3 === 0) {
        $output .= "Coza";
    }
    if ($number % 5 === 0) {
        $output .= "Loza";
    }
    if ($number % 7 === 0) {
        $output .= "Woza";
    }

    if ($output === "") {
        $output = (string)$number;
    }
    echo $output . " ";
    $counter++;
    if ($counter % 11 === 0) {
        echo PHP_EOL;
    }
}