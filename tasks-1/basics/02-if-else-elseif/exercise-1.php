<?php
/*
 * Given variables (int) 10, string "10" determine if they both are the same.
 */

$numInt = 10;
$numStr = '10';

if ($numInt === $numStr) {
    echo 'Values are identical';
} elseif ($numInt == $numStr) {
    echo 'Values are equal';
} else {
    echo 'Values are not equal';
}
