<?php

// Abs()

// The abs() function returns the absolute value of a number.

// Syntax: abs ( mixed $number )

// The numeric value to process

// Example:

$abs = abs(-4.2); // $abs = 4.2; (double/float)
$abs2 = abs(5); // $abs2 = 5; (integer)
$abs3 = abs(-5); // $abs3 = 5; (integer)

// Ceil()

// Round numbers up to the nearest integer.

// Syntax: Ceil(float value);

// Example:

echo ceil(0.60) . "<br>"; // 1
echo ceil(0.40) . "<br>"; // 1
echo ceil(5) . "<br>"; // 5
echo ceil(5.1) . "<br>"; // 6
echo ceil(-5.1) . "<br>"; //-5
echo ceil(-5.9); // -5

// floor()

// Round numbers down to the nearest integer:

// Syntax: floor(float value);

// Example

echo floor(0.60) . "<br>"; // 0
echo floor(0.40) . "<br>"; // 0
echo floor(5) . "<br>"; // 5
echo floor(5.1) . "<br>"; // 5
echo floor(-5.1) . "<br>"; // -6
echo floor(-5.9); // -6

// round()

// Rounds a float:

// Syntax: round(float value, [int Precision]);

// Example

echo round(3.4) . "<br>"; // 3
echo round(3.5) . "<br>"; // 4
echo round(3.6) . "<br>"; // 4
echo round(1.95583, 2) . "<br>"; // 1.96
echo round(5.045, 2) . "<br>"; // 5.05

// fmod()

// Return the remainder of x/y:

// Syntax: fmod(float x, float y);

// Example

$x = 7;
$y = 2;
$result = fmod($x,$y);
echo $result; // Output: 1

// min()

// Find the lowest value.

// Syntax: min(arg1, arg2, argN..);

// Example

echo min(2,4,6,8,10) . "<br>"; // 2
echo min(22,14,68,18,15) . "<br>"; // 14
echo min(array(4,6,8,10)) . "<br>"; // 4
echo min(array(44,16,81,12)); // 12

// Max()

// Find the highest value

// Syntax: max(arg1, arg2, argN..);

// Example

echo max(2,4,6,8,10) . "<br>"; // 10
echo max(22,14,68,18,15) . "<br>"; // 68
echo max(array(4,6,8,10)) . "<br>"; // 10
echo max(array(44,16,81,12)); // 81

// pow()

// The pow() function returns x raised to the power of y.

// Syntax: pow(base, exp);

// Example

echo pow(2, 2) . "<br>"; // 4
echo pow(2, -2) . "<br>"; // 0.25

// sqrt()

// Return square root of given value

// Syntax: sqrt(value);

// Example

echo sqrt(0) . "<br>"; // 0
echo sqrt(1) . "<br>"; // 1
echo sqrt(9) . "<br>"; // 3
echo sqrt(0.64) . "<br>"; // 0.8

// random()

// The rand() function generates a random integer.

// If this function is called without parameters, it returns a random integer between 0 and RAND_MAX.

// If you want a random number between 10 and 100 (inclusive), use rand (10,100)

// Syntax: int rand ( void )

// int rand ( int $min , int $max )

// Example

echo rand() . "<br>"; // Example output: 777
echo rand() . "<br>"; // Example output: 22264
echo rand(5, 15); // Example output: 11

?>
