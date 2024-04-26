<?php
/*
 * By your choice, create condition with 3 checks.
 * For example, if value is greater than X, less than Y and is an even number.
 */

$cookieCount = 5;

if ($cookieCount <= 1) {
    echo "You are out of cookies.";
} elseif ($cookieCount === 5) {
    echo "You have $cookieCount cookies.";
} else {
    echo "Would you like to share your $cookieCount cookies?";
}