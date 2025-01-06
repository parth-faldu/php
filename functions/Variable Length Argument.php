<?php

// func_num_args()

// Returns the number of arguments passed into the current user-defined function.

function hello()
{
    $num_args = func_num_args();
    echo "Number of arguments: $num_args";
}

hello(1, 2, 3);

// Output: Number of arguments: 3

echo "<br>";

// func_get_arg()

// Returns the argument which is at the arg_num'th offset into a user-defined function's argument list.

// Function arguments are counted starting from zero.

function hello2()
{
    $num_args = func_num_args();
    echo "Number of arguments: $num_args<br>";
    if ($num_args >= 2) 
	{
        echo "Second argument is: " . func_get_arg(1) . "<br />";
    }
}

hello2(1, 2, 3);

// Output:
// Number of arguments: 3
// Second argument is: 2

echo "<br>";

// func_get_args()

// It creates and returns an array which contains values of all arguments provided in the function call operation.

function fnum_args()
{
    $num_args = func_num_args();
    echo "Number of arguments: $num_args<br>";
    $arg_list = func_get_args();
	
    for ($i = 0; $i < $num_args; $i++) 
	{
        echo "Argument $i is: " . $arg_list[$i] . "<br>\n";
    }
}

fnum_args(1, 2, 3);

// Output:
// Argument 0 is: 1
// Argument 1 is: 2
// Argument 2 is: 3

?>
