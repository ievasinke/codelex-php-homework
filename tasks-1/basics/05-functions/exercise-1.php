<?php
/* Create a function that accepts any string and
 * returns the same value with added "codelex" by the end of it.
 * Print this value out.
 */

function printString(string $word): string
{
    return "$word codelex\n";
}

$input = (string)readline("Enter word: ");
echo printString($input);
