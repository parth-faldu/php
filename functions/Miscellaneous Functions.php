<?php

// Include() function

// Include function is used to put data of one PHP file into another PHP file.

// If an error occurs, the include() function produces a warning but does not stop the execution of the script.

// Syntax: include(filename);

//include("filename.php");



// Require() function

// Require function is also used to put data of one PHP file into another PHP file.

// If an error occurs, the require() function produces a warning and stops the execution of the script.

// Syntax: require(filename);

// Define() function

// What are CONSTANTS in PHP?

// “A constant is an identifier (name) for a simple value.”

// In PHP, constants are defined using the DEFINE() function.

// Example



// Defining constants

define("pi", 3.14);
define("VERSION", "5.5.14");

// Using constants

echo "Value of pi is " . pi . "<br>";
echo "Version is " . VERSION . "<br>";


// Die() and Exit() function

// Both are used to terminate the program.

// Both are used to print a message on the screen and terminate.


$a = 3;
$b = 3;

if ($a == $b) {
    die("Using exit, We are done");
    //echo "I'll not be printed, as the program will terminate for executing exit function";
}

// Header() function

// The header() function is a predefined PHP native function. With header() HTTP functions, we can control data sent to the client or browser by the Web server before some other output has been sent.

// The header function sets the headers for an HTTP Response given by the server. We can do all sorts of things using the header function in PHP like Change page location, to download a pdf, etc.

// Some of the important uses of the header() in PHP are listed below:

// Redirect page: It is used to redirect from one web page to another web page in PHP.
// Example: header('Location:http://www.javatpoint.com');

// To download pdf files: It is used to download pdf files.
// Example:
// header("Content-type:application/pdf");
// header("Content-Disposition:attachment;filename='29.pdf'");

?>
