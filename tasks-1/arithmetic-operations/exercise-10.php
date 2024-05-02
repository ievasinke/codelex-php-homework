<?php

/*
Design a Geometry class with the following methods:

A static method that accepts the radius of a circle and returns the area of the circle.
Use the following formula:
Area = π * r * 2
Use Math.PI for π and r for the radius of the circle
A static method that accepts the length and width of a rectangle and returns the area of the rectangle.
Use the following formula:
Area = Length x Width
A static method that accepts the length of a triangle’s base and the triangle’s height.
The method should return the area of the triangle. Use the following formula:
Area = Base x Height x 0.5
The methods should display an error message if negative values are used for the circle’s radius,
the rectangle’s length or width, or the triangle’s base or height.

Next write a program to test the class, which displays the following menu and
responds to the user’s selection:

echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle";
echo "2. Calculate the Area of a Rectangle";
echo "3. Calculate the Area of a Triangle";
echo "4. Quit\n";
echo "Enter your choice (1-4) : ";

Display an error message if the user enters a number outside the range
of 1 through 4 when selecting an item from the menu.
 */

class Geometry
{
    private static function validateInput(int $number): void
    {
        if ($number <= 0) {
            throw new InvalidArgumentException("Value must be positive.");
        }
    }

    public static function calculateCircle(int $radius): float
    {
        self::validateInput($radius);
        return M_PI * ($radius ** 2);
    }

    public static function calculateRectangle(int $length, int $width): int
    {
        self::validateInput($length);
        self::validateInput($width);
        return $length * $width;
    }

    public static function calculateTriangle(int $base, int $height): float
    {
        self::validateInput($base);
        self::validateInput($height);
        return 0.5 * $base * $height;
    }
}

echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n";
$choice = (int)readline("Enter your choice (1-4): ");
try {
    switch ($choice) {

        case 1:
            $radius = (int)readline("Radius: ");
            $circleArea = number_format(Geometry::calculateCircle($radius), 1);
            echo "Area of a Circle: $circleArea\n";
            break;
        case 2:
            $length = (int)readline("Length: ");
            $width = (int)readline("Width: ");
            $rectangleArea = Geometry::calculateRectangle($length, $width);
            echo "Area of a Rectangle: $rectangleArea\n";
            break;
        case 3:
            $base = (int)readline("Base: ");
            $height = (int)readline("Height: ");
            $triangleArea = Geometry::calculateTriangle($base, $height);
            echo "Area of a Triangle: $triangleArea\n";
            break;
        case 4:
            echo "Exiting the Geometry Calculator.\n";
        break;
        default:
            echo "Error: Invalid choice. Please enter a number from 1 to 4.\n";
            break;
    }
} catch
(InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

