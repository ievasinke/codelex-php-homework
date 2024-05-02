<?php
/*
 * Modify the example program to compute the position of an object
 * after falling for 10 seconds, outputting the position in meters.
 * The formula in Math notation is: Gravity formula x(t) = 0.5 * a * t^2 + v_i * t + x_i
 * a = -9.81, t = 10, v_i = 0, x_i = 0
 * Note: The correct value is -490.5m.
 */

$acceleration = -9.81;
$time = 10;
$initialVelocity = 0;
$initialPosition = 0;

$position = (0.5 * $acceleration) * $time ** 2 + $initialVelocity * $time + $initialPosition;

echo "Position after $time second(s): $position m\n";