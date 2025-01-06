<?php

// count()

// The count() function counts the elements of an array.

$number = array("One", "Two", "three");

$result = count($number);

echo $result . "<br>"; // Output: 3

// list()

// The list() function is used to assign values to a list of variables in one operation.

$info = array('coffee', 'brown', 'sweet');

list($drink, $color, $power) = $info;

echo "$drink is $color and $power makes it tasty." . "<br>"; // Output: Coffee is brown and sweet makes it tasty.

// in_array()

// The in_array() function searches an array for a specific value.

// This function returns TRUE if the value is found in the array, or FALSE otherwise.

$number = array("One", "Two", "three");

$arr = in_array("One", $number);

echo $arr . "<br>"; // Output: 1

if (in_array("One", $number)) {
    echo "Array element is found" . "<br>";
} else {
    echo "Array element is not found" . "<br>";
}

// current()

// The current() function returns the value of the current element in an array.

$number = array("One", "Two", "three");

$arr = current($number);

echo $arr . "<br>"; // Output: One

// next()

// The next() function moves the internal pointer to, and outputs, the next element in the array.

$number = array("One", "Two", "three");

echo current($number) . "<br>";
echo next($number) . "<br>"; // Output: One, Two

// prev()

// The prev() function moves the internal pointer to, and outputs, the previous element in the array.

$student = array("Ronak", "Vipul", "Shakshi");

echo next($student) . "<br>";
echo prev($student) . "<br>"; // Output: Vipul, Ronak

// end()

// The end() function moves the internal pointer to, and outputs, the last element in the array.

$student = array("Ronak", "Vipul", "Shakshi");

echo next($student) . "<br>";
echo prev($student) . "<br>";
echo end($student) . "<br>"; // Output: Vipul, Ronak, Shakshi

// sort()

// The sort() function sorts an array by the values.

$student = array("Ronak", "Vipul", "Shakshi");

sort($student);

print_r($student);
// Output: Array ( [0] => Ronak [1] => Shakshi [2] => Vipul )

// rsort()

// The rsort() function sorts an array by the values in reverse order.

$arr = array("Ronak", "Vipul", "Rashi");

rsort($arr); // Keys recreated

print_r($arr);
// Output: Array ( [0] => Vipul [1] => Ronak [2] => Rashi )

// asort()

// The asort() function sorts an array by the values. The values keep their original keys.

$a = array("Ronak" => "y", "Vipul" => "b", "Rashi" => "e");

asort($a);

print_r($a);
// Output: Array ( [Vipul] => b [Rashi] => e [Ronak] => y )

// arsort()

// The arsort() function sorts an array by the values in reverse order. The values keep their original keys.

$a = array("Ronak" => "a", "Vipul" => "b", "Rashi" => "c");

arsort($a);

print_r($a);
// Output: Array ( [Rashi] => c [Vipul] => b [Ronak] => a )

// array_merge()

// The array_merge() function merges one or more arrays into one array.

$a1 = array("sub1" => "60", "sub2" => "60");
$a2 = array("php" => "A Grade", "C#" => "A Grade");

print_r(array_merge($a1, $a2));
// Output: Array ( [sub1] => 60 [sub2] => 60 [php] => A Grade [C#] => A Grade )

// array_shift()

// The array_shift() function removes the first element from an array, and returns the value of the removed element.

$a = array("a" => "Dog", "b" => "Cat", "c" => "Horse");

echo array_shift($a) . "<br>"; // returns first removed value
print_r($a);
// Output: Dog, Array ( [b] => Cat [c] => Horse )

// array_unshift()

// The array_unshift() function inserts new elements to an array. The new array values will be inserted in the beginning of the array. The function returns the new number of elements in the array.

$a = array("a" => "Cat", "b" => "Dog");
echo (array_unshift($a, "Horse"));

print_r($a);
// Output will be 3, Array ( [0] => Horse [a] => Cat [b] => Dog )

// array_push()

// The array_push() function inserts one or more elements to the end of an array and returns the whole array list.

$a = array(10, 20);
array_push($a, 30);

print_r($a);
// Output: Array ( [0] => 10 [1] => 20 [2] => 30 )

// array_pop()

// The array_pop() function deletes the last element of an array.

$t = array(1, 2, 3);

array_pop($t);

print_r($t);
// Output: Array ( [0] => 1 [1] => 2 )

?>
