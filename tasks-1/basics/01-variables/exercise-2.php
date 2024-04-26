<?php

/*
 * Dump the same values that should display both data type & its value. (Note, usage of var_dump)
 */

$number = 10;
$numFloat = 10.10; //var_dump($numFloat); float(10.0999999999999996447286321199499070644378662109375)
$greeting = 'hello world';

var_dump($number);
var_dump($numFloat);
var_dump($greeting);
