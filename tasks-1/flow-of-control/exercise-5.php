<?php
/*
 * On your phone keypad, the alphabets are mapped to digits as follows:
 * ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
 * Write a program called PhoneKeyPad,
 * which prompts user for a String (case insensitive),
 * and converts to a sequence of keypad digits.
 * Use:
 *  * a "nested-if" statement
 *  * a "switch-case-default" statement
 * Hint: In switch-case, you can handle multiple cases by omitting the break statement, e.g.,
 */

function phoneKeyPad(string $text): string
{
    $text = strtolower($text);
    $result = '';

    foreach (str_split($text) as $char) {
        switch ($char) {
            case 'a':
            case 'b':
            case 'c':
                $result .= '2';
                break;
            case 'd':
            case 'e':
            case 'f':
                $result .= '3';
                break;
            case 'g':
            case 'h':
            case 'i':
                $result .= '4';
                break;
            case 'j':
            case 'k':
            case 'l':
                $result .= '5';
                break;
            case 'm':
            case 'n':
            case 'o':
                $result .= '6';
                break;
            case 'p':
            case 'q':
            case 'r':
            case 's':
                $result .= '7';
                break;
            case 't':
            case 'u':
            case 'v':
                $result .= '8';
                break;
            case 'w':
            case 'x':
            case 'y':
            case 'z':
                $result .= '9';
                break;
            default:
                $result .= ' ';
                break;
        }
    }
    return $result;
}

$messageText = (string)readline("Enter text: ");
$keypadDigits = phoneKeyPad($messageText);
echo "Keypad digits: $keypadDigits\n";