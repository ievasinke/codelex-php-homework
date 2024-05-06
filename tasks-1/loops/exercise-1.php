<?php

echo "The first 10 natural numbers are: ";

//todo write a program that displays first 10 natural numbers

$naturalNumbers = range(1, 10);
foreach ($naturalNumbers as $naturalNumber) {
    echo "$naturalNumber ";
}