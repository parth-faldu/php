<?php

// chr()

// The chr() function returns a character from the specified ASCII value.

// Syntax: chr(ascii)

// Example

echo chr(53)."<br />"; // Output: 5
echo chr(65)."<br />"; // Output: A
echo chr(100)."<br />"; // Output: d

// ord()

// The ord() function returns the ASCII value of the first character of a string.

// Syntax: ord(string)

// Example

echo ord("atmiya")."<br />"; // Output: 97
echo ord("a")."<br />"; // Output: 97

// strtolower()

// This function converts the string to lower case.

// Syntax: strtolower(string);

// Example

echo strtolower("Hello BCA 3 Sem"); // Output: hello bca 3 sem

// strtoupper()

// This function converts the string to upper case.

// Syntax: strtoupper(string);

// Example

echo strtoupper("Hello BCA 3 Sem"); // Output: HELLO BCA 3 SEM

// strlen()

// This function returns the length of the string.

// Syntax: strlen(string);

// Example

echo strlen("Atmiya")."<br />"; // Output: 6
$a = "str";
echo strlen($a); // Output: 3

// trim()

// The trim() function is used to remove the white spaces and other predefined characters from the left and right sides of a string.

// Syntax: trim(string_name, char_list)

// Example

$str = " Welcome to BCA 3 Sem ";
echo trim($str); // Output: Welcome to BCA 3 Sem

// substr()

// The substr() function used to cut a part of a string from a string, starting at a specified position.

// Syntax: substr(string_name, start_pos, length_to_cut)

// Example

$str = "Welcome to BCA 3 Sem";
echo substr($str, 0, 5)."<br>"; // Output: Welco
echo substr($str, 5); // Output: me to BCA 3 Sem

// strcmp()

// The strcmp() function is used to compare two strings.

// Syntax: strcmp(string1, string2)

// Example

$str = "Welcome to BCA 3 Sem";
$str1 = "Welcome to BCA 3 Sem";
echo $result = strcmp($str, $str1)."<br>"; // Output: 0
$str2 = "Welcome to BCA 3";
$str3 = "Welcome to BCA 3 Sem";
echo $result = strcmp($str2, $str3)."<br>"; // Output: -4
echo $result = strcmp($str3, $str2)."<br>"; // Output: 4

// strstr()

// The strstr() function searches for the first occurrence of a string inside another string.

// Syntax: strstr(string,search)

// Example

$str = "Aatmiy";
echo strstr($str, "at"); // Output: atmiy

// str_replace()

// The str_replace() function replaces some characters with some other characters in a string.

// Syntax: str_replace("Find Str","Rep Str","main_string",count)

// Example

$str = "Atmiya College";
echo str_replace("College", "Rajkot", $str)."<br>"; // Output: Atmiya Rajkot
str_replace("College", "Rajkot", $str, $i);
echo "Replacements=".$i."<br>"; // Output: Replacements=1
$arr = array("one", "two", "three");
$arr1 = str_replace("three", "four", $arr);
print_r($arr1); // Output: Array ( [0] => one [1] => two [2] => four )

// strrev()

// The strrev() function is used to reverse a string.

// Syntax: strrev(main_string)

// Example

$str = "Atmiya College";
echo strrev($str); // Output: egelloC ayimtA

// explode()

// The explode() function breaks a string into an array.

// The "separator" parameter cannot be an empty string.

// Syntax: explode(separator,string,limit)

$str = "Hello world. It's a beautiful day.";
print_r(explode(" ", $str)); // Output: Array ( [0] => Hello [1] => world. [2] => It's [3] => a [4] => beautiful [5] => day. )

// implode()

// The implode() function returns a string from the elements of an array.

// Syntax: implode(separator , array)

$arr = array('Hello', 'World!', 'Beautiful', 'Day!');
echo implode(" ", $arr)."<br>"; // Output: Hello World! Beautiful Day!
echo implode("+", $arr)."<br>"; // Output: Hello+World!+Beautiful+Day!
echo implode("-", $arr)."<br>"; // Output: Hello-World!-Beautiful-Day!
echo implode("X", $arr); // Output: HelloXWorld!XBeautifulXDay!

// Md5()

// The md5() function calculates the MD5 hash of a string.

// Syntax: md5(string,raw)

$str = "Hello";
echo "The string: ".$str."<br>"; // Output: The string: Hello
echo "32 character hex number: ".md5($str)."<br>"; // Output: 32 character hex number: 8b1a9953c4611296a827abf8c47804d7

// substr_compare()

// The substr_compare() function compares two strings from a specified start position.

// Syntax: substr_compare(string1,string2,startpos,length,case)

echo substr_compare("Hello world", "Hello world", 0); // Output: 0
echo substr_compare("world", "or", 1, 2); // Output: 1
echo substr_compare("world", "OR", 1, 2, TRUE); // Output: 0
echo substr_compare("world", "or", 1, 3); // Output: 1

// substr_count()

// The substr_count() function counts the number of times a substring occurs in a string.

// Syntax: substr_count(string,substring,start,length)

$str = "This is PHP";
echo strlen($str)."<br>"; // Output: 11
echo substr_count($str, "is")."<br>"; // Output: 2
echo substr_count($str, "is", 2)."<br>"; // Output: 2
echo substr_count($str, "is", 3)."<br>"; // Output: 1
echo substr_count($str, "is", 3, 3); // Output: 0

?>
