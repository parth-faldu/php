<?php

// Outputs the current date in the format "YYYY/MM/DD"
echo date("Y/m/d") . "<br>";     

// Outputs the current date in the format "YYYY.MM.DD"
echo date("Y.m.d") . "<br>";     

// Outputs the current date in the format "YYYY-MM-DD"
echo date("Y-m-d") . "<br>";              

// Outputs an array containing date/time information 
print_r(getdate()); echo "<br>";               

// Sets the default timezone to "Asia/Calcutta"
date_default_timezone_set("Asia/Calcutta");

// Creates a DateTime object and sets its date to "2019-09-30"
$datetime = new DateTime();
$Year = '2019'; $Month = '09'; $Day = '30';
$datetime->setDate($Year, $Month, $Day);
echo $datetime->format('Y-m-d') . "<br>";   // Outputs the date "2019-09-30" 

// Creates a DateTime object and sets its date to "2001-02-03"
$date = new DateTime();
$date->setDate(2001, 2, 3);
echo $date->format('Y-m-d') . "<br>";       // Outputs the date "2001-02-03" 

// Checks if the date "12/31/2000" is valid
var_dump(checkdate(12, 31, 2000)); echo "<br>";    // Outputs bool(true) 

// Checks if the date "2/29/2001" is valid (leap year)
var_dump(checkdate(2, 29, 2001)); echo "<br>";     // Outputs bool(false) 

// Creates a DateTime object from the string "2013-03-15" and formats it as "YYYY/MM/DD"
$date = date_create("2013-03-15");
echo date_format($date,"Y/m/d") . "<br>";    // Outputs the date "2013/03/15" 

// Gets the current Unix timestamp
$t = time();
echo($t . "<br>");
// Formats the Unix timestamp as "YYYY-MM-DD"
echo(date("Y-m-d",$t)) . "<br>";            // Outputs 1578545588 and then "2020-01-09" 

// Outputs the day of the week for October 3, 1975
echo "Oct 3, 1975 was on a " . date("l", mktime(0,0,0,10,3,1975)) . "<br>"; // Outputs "Oct 3, 1975 was on a Friday" 

?>
