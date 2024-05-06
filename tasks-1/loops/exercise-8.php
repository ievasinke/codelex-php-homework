<?php
/*
 * Write a console program in a class named NumberSquare that
 * prompts the user for two integers, a min and a max,
 * and prints the numbers in the range from min to max inclusive in a square pattern.
 * Each line of the square consists of a wrapping sequence of integers increasing from min and max.
 * The first line begins with min, the second line begins with min + 1, and so on.
 * When the sequence in any line reaches max, it wraps around back to min.
 * You may assume that min is less than or equal to max. Here is an example dialogue:
 * > Min? 1
 * > Max? 5
 * > 12345
 * > 23451
 * > 34512
 * > 45123
 * > 51234
 */

class NumberSquare
{
    private int $minValue;
    private int $maxValue;

    public function getValues()
    {
        $this->minValue = (int)readline("Min? ");
        $this->maxValue = (int)readline("Max? ");
        if (!is_numeric($this->maxValue) || !is_numeric($this->minValue)) {
            throw new InvalidArgumentException("Value must be number.");
        }
        if ($this->minValue < 1) {
            throw new InvalidArgumentException("Min must be greater than 0.");
        }
        if ($this->maxValue < $this->minValue) {
            throw new InvalidArgumentException("Max must be greater or equal to Min.");
        }
    }

    public function createNumberSquare()
    {
        $numbers = range($this->minValue, $this->maxValue);
        $totalRows = count($numbers);

        for ($i = 0; $i < $totalRows; $i++) {
            echo implode('', $numbers) . PHP_EOL;

            $firstElement = array_shift($numbers);
            $numbers[] = $firstElement;
        }
    }
}

try {
    $numberSquare = new NumberSquare();
    $numberSquare->getValues();
    $numberSquare->createNumberSquare();
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}