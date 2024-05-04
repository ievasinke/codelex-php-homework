<?php
/*
 * Write a program to play a word-guessing game like Hangman.
 * It must randomly choose a word from a list of words.
 * It must stop when all the letters are guessed.
 * It must give them limited tries and stop after they run out.
 * It must display letters they have already guessed (either only the incorrect guesses or all guesses).
 * Word:	l e v i a t h a n
 * Misses:	rso
 * (Guess:	h)
 * YOU GOT IT!
 * Play "again" or "quit"?
 */

function display(array $guessWord, array $missedLetters)
{
    echo "Word: " . implode(" ", $guessWord) . "\n"; // Show guessed word
    if (!empty($missedLetters)) { // Show missed guesses if any
        echo "Misses: " . implode("", $missedLetters) . "\n";
    }
}

$words = ['leviathan', 'dragon', 'phoenix', 'unicorn'];
do {
    $word = str_split($words[array_rand($words)], 1);
    $guessWord = array_fill(0, count($word), "_");
    $missedLetters = [];
    $counter = count($word) + 3;

    display($guessWord, $missedLetters);

    while ($counter > 0) {

        $guess = (string)readline("Guess a letter: ");
        if (empty($guess) || strlen($guess) > 1 || !ctype_alpha($guess)) {
            echo "Invalid guess. Please guess a single letter.\n";
            continue;
        }
        if (in_array($guess, $guessWord) || in_array($guess, $missedLetters)) {
            echo "You already guessed '$guess'. Try again.\n";
            continue;
        }

        $positions = array_keys($word, $guess);
        if (!$positions) {
            $missedLetters[] = $guess;
        } else {
            foreach ($positions as $position) {
                $guessWord[$position] = $guess;
            }
            if ($word === $guessWord) {
                echo "YOU GOT IT!\nThe word was " . implode("", $word) . "\n";
                break;
            }
        }
        $counter--;
        display($guessWord, $missedLetters);
    }
    if ($counter <= 0) {
        echo "Out of guesses! The word was " . implode("", $word) . "\n";
    }

    $playAgain = strtolower((string)readline("Play \"again\" or \"quit\"? "));
} while ($playAgain === "again");

echo "Thanks for playing!\n";