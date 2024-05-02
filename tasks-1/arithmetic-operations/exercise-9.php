<?php

/*
 * Write a program that calculates and displays a person's body mass index (BMI).
 * A person's BMI is calculated with the following formula:
 * BMI = weight x 703 / height ^ 2.
 * Where weight is measured in pounds and height is measured in inches.
 * Display a message indicating whether the person has optimal weight, is underweight, or is overweight.
 * A sedentary person's weight is considered optimal if his or her BMI is between 18.5 and 25.
 * If the BMI is less than 18.5, the person is considered underweight.
 * If the BMI value is greater than 25, the person is considered overweight.
 * Your program must accept metric units.
 */

function kilogramsToPounds(float $weight): float
{
    return $weight * 2.2046;
}

function centimetersToInches(int $height): float
{
    return $height * 0.3937;
}

$weightKilograms = (int)readline("Your weight in kilograms: ");
$heightCentimeters = (int)readline("Your height in centimeters: ");

if ($weightKilograms <= 0 || $heightCentimeters <= 0) {
    echo "Error: Please enter positive numbers for weight and height.\n";
    exit;
}

$weightPounds = kilogramsToPounds($weightKilograms);
$heightInches = centimetersToInches($heightCentimeters);

$bmi = number_format(($weightPounds * 703) / ($heightInches ** 2), 1);

if ($bmi < 18.5) {
    echo "Your BMI is $bmi. You are underweight.\n";
} elseif ($bmi >= 18.5 && $bmi <= 25) {
    echo "Your BMI is $bmi. You have an optimal weight.\n";
} elseif ($bmi > 25) {
    echo "Your BMI is $bmi. You are overweight.\n";
}