<?php
// LowerCase()

// UpperCase()

// strtolower() function converts  a string to lowercase.
// strtoupper() - converts a string to uppercase
// lcfirst() - converts the first character of a string to lowercase
// ucfirst() - converts the first character of a string to uppercase
// ucwords() - converts the first character of each word in a string to uppercase


// all character converts lowercase 
$str = "Dalveer Singh <br>";
$newstr = strtolower($str);
echo $newstr;

// all character converts uppercase 
$str = "Dalveer Singh <br>";
$newstr = strtoupper($str);
echo $newstr;


// first character converts lowercase
$str = "Dalveer Singh <br>";
$newstr = lcfirst($str);
echo $newstr;

// first character converts uppercase
$str = "dalveer Singh <br>";
$newstr = ucfirst($str);
echo $newstr;


// first character of each word character converts 
$str = "dalveer singh <br>";
$newstr = ucwords($str);
echo $newstr;
