<?php
/*
 * Write a console program in a class named Piglet that
 * implements a simple 1-player dice game called "Piglet" (based on the game "Pig").
 * The player's goal is to accumulate as many points as possible without rolling a 1.
 * Each turn, the player rolls the die; if they roll a 1,
 * the game ends and they get a score of 0. Otherwise,
 * they add this number to their running total score.
 * The player then chooses whether to roll again,
 * or end the game with their current point total.
 * Here is an example dialogue where the user plays until rolling a 1,
 * which ends the game with 0 points:
 * > Welcome to Piglet!
 * > You rolled a 5!
 * > Roll again? yes
 * > You rolled a 4!
 * > Roll again? yes
 * > You rolled a 1!
 * > You got 0 points.
 * Here is another example dialogue where
 * the user stops early and gets to end the game with 10 points:
 * > Welcome to Piglet!
 * > You rolled a 6!
 * > Roll again? y
 * > You rolled a 2!
 * > Roll again? y
 * > You rolled a 2!
 * > Roll again? n
 * > You got 10 points.
 */

class Piglet
{
    private int $dice;
    private bool $isPlaying = true;
    private int $result = 0;

    public function startGame()
    {
        echo "Welcome to Piglet!\n";
        while ($this->isPlaying) {
            $this->playGame();
        }
    }

    public function playGame()
    {
        $this->rollDice();
        echo "You rolled a {$this->dice}!\n";
        if ($this->dice == 1) {
            $this->result = 0;
            $this->endGame("You got 0 points.");
            return;
        }
        $this->result += $this->dice;
        $this->askRollAgain();
    }

    public function askRollAgain()
    {
        $playAgain = strtolower((string)readline("Roll again? (y/n) "));

        while ($playAgain !== 'yes' && $playAgain !== 'y' && $playAgain !== 'no' && $playAgain !== 'n') {
            echo "Please enter 'y' or 'n'.\n";
            $playAgain = strtolower((string)readline("Roll again? (y/n) "));
        }
        if ($playAgain === 'n' || $playAgain === 'no') {
            $this->endGame("You got $this->result points.");
        }
    }

    public function rollDice(): int
    {
        return $this->dice = rand(1, 6);
    }

    public function endGame(string $message)
    {
        echo $message . PHP_EOL;
        $this->isPlaying = false;
    }
}

try {
    $pigletOne = new Piglet();
    $pigletOne->startGame();
} catch (Exception $exception) {
    echo "Error: " . $exception->getMessage();
}
