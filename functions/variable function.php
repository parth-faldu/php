<?php

// unset()

// The unset() function destroys a given variable or unsets the given variable.

$xyz = 'abc';

echo 'Before using unset() the value of $xyz is : ' . $xyz . '<br>';

unset($xyz);
// Unsetting the variable
echo 'After using unset() the value of $xyz is : ' . $xyz;

// Output: Before using unset() the value of $xyz is : abc
// After using unset() the value of $xyz is :

echo "<br>";

// var_dump()

// The var_dump() function is used to display structured information (type and value) about one or more variables.

$var_name1 = 678;
$var_name2 = "test";

var_dump($var_name1);
var_dump($var_name2);

// Output:
// int(678)
// string(4) "test"

echo "<br>";

// isset()

// The isset() function is used to check whether a value of a variable is set or not. Returns true or false.

// The isset() function returns false if the testing variable contains a NULL value.

$a = 0;

if (isset($a)) {
    echo "Variable 'a' is set.<br>";
}

// Output: Variable 'a' is set.

echo "<br>";

// empty()

// Check whether a variable is empty.

$a = 0;

// True because $a is empty
if (empty($a)) {
    echo "Variable 'a' is empty.";
}

// Output: Variable 'a' is empty.

echo "<br>";

// gettype()

// It is used to get the type of a variable.

echo gettype(102) . '<br>';
echo gettype(true) . '<br>';
echo gettype(' ') . '<br>';
echo gettype(null) . '<br>';
echo gettype(array()) . '<br>';

// Output:
// integer
// boolean
// string
// NULL
// array

echo "<br>";

// settype()

// The settype() function is used to set the type of a variable.

$var1 = '98';
$var2 = '01';

settype($var1, "integer");
settype($var2, "integer");

echo ($var1 . '<br>');
echo ($var2 . '<br>');
echo ($var1 + $var2 . '<br>');

// Output:
// 98
// 1
// 99

?>
