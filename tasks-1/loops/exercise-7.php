<?php
/*
 * Write a console program in a class named RollTwoDice that
 * prompts the user for a desired sum,
 * then repeatedly rolls two six-sided dice
 * (using a Random object to generate random numbers from 1-6)
 * until the sum of the two dice values is the desired sum.
 * Here is the expected dialogue with the user:
 * > Desired sum: 9
 * > 4 and 3 = 7
 * > 3 and 5 = 8
 * > 5 and 6 = 11
 * > 5 and 6 = 11
 * > 1 and 5 = 6
 * > 6 and 3 = 9
 */

class RollTwoDice
{
    private function rollDice(): int
    {
        return rand(1, 6);
    }

    public function getDesiredSum(): int
    {
        $desiredSum = (int)readline("Desired sum (2-12): ");
        if ($desiredSum < 2 || $desiredSum > 12) {
            echo "Sum must be between 2 and 12";
            exit();
        }
        return $desiredSum;
    }

    public function rollUntilDesiredSum(int $desiredSum)
    {
        $sum = 0;
        while ($sum != $desiredSum) {
            $diceOne = $this->rollDice();
            $diceTwo = $this->rollDice();
            $sum = $diceOne + $diceTwo;

            echo "$diceOne and $diceTwo = $sum\n";
        }
    }
}

$rollTwoDice = new RollTwoDice();
$desiredSum = $rollTwoDice->getDesiredSum();
$rollTwoDice->rollUntilDesiredSum($desiredSum);
