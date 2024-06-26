<?php
/* Write a console program in a class named FizzBuzz that
 * prompts the user for an integer,
 * then prints all of the numbers from one to that integer,
 * separated by spaces.
 * Use a loop to print the numbers.
 * But for multiples of three, print "Fizz" instead of the number,
 * and for the multiples of five print "Buzz".
 * For numbers which are multiples of both three and five print "FizzBuzz".
 * Drop to a new line after print each 20 numbers. If the user typed 100, the output would be:
 * Max value? 100
 * 1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz
 * Fizz 22 23 Fizz Buzz 26 Fizz 28 29 FizzBuzz 31 32 Fizz 34 Buzz Fizz 37 38 Fizz Buzz
 * 41 Fizz 43 44 FizzBuzz 46 47 Fizz 49 Buzz Fizz 52 53 Fizz Buzz 56 Fizz 58 59 FizzBuzz
 * 61 62 Fizz 64 Buzz Fizz 67 68 Fizz Buzz 71 Fizz 73 74 FizzBuzz 76 77 Fizz 79 Buzz
 * Fizz 82 83 Fizz Buzz 86 Fizz 88 89 FizzBuzz 91 92 Fizz 94 Buzz Fizz 97 98 Fizz Buzz
 */

class FizzBuzz
{
    private int $number;
    private array $numberList;

    public function askInput()
    {
        $this->number = (int)readline("Enter number (1-100): ");
        $this->validateInput();
    }

    function createNumberList()
    {
        $this->numberList = range(1, $this->number);
    }

    function setResult()
    {
        foreach ($this->numberList as $item) {
            $result = "";
            if ($item % 3 == 0) {
                $result .= "Fizz";
            }
            if ($item % 5 == 0) {
                $result .= "Buzz";
            }
            if ($result === "") {
                $result = $item;
            }
            echo $result . " ";
        }
    }

    private function validateInput()
    {
        if ($this->number < 1 || $this->number > 100) {
            throw new InvalidArgumentException("Number must be number between 1 and 100.\n");
        }
    }

}

try {
    $fizzBuzzOne = new FizzBuzz();
    $fizzBuzzOne->askInput();
    $fizzBuzzOne->createNumberList();
    $fizzBuzzOne->setResult();
} catch (InvalidArgumentException $exception) {
    echo "Error: " . $exception->getMessage();
}
