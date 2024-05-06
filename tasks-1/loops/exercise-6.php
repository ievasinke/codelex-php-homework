<?php
/*
 * Write a console program in a class named AsciiFigure that
 * draws a figure of the following form, using for loops.
 * ////////////////\\\\\\\\\\\\\\\\
 * ////////////********\\\\\\\\\\\\
 * ////////****************\\\\\\\\
 * ////************************\\\\
 * ********************************
 * Then, modify your program using an integer class constant so that
 * it can create a similar figure of any size. For instance, the diagram above has a size of 5.
 */

class AsciiFigure
{
    const ROWS = 5;

    public function drawFigure()
    {
        $totalColumns = 2 * (self::ROWS - 1);
        for ($i = 0; $i < self::ROWS; $i++) {
            $slashes = str_repeat("////", ($totalColumns / 2) - $i);
            $backslashes = str_repeat("\\\\\\\\", ($totalColumns / 2) - $i);
            $asterisks = str_repeat("****", $i * 2);

            $rowPattern = $slashes . $asterisks . $backslashes;
            echo $rowPattern . PHP_EOL;
        }
    }
}

$asciiFigure = new AsciiFigure();
$asciiFigure->drawFigure();
