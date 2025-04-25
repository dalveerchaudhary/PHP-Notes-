<?php
// A string is a sequence of characters, like "Hello world!".
// Strings in PHP are surrounded by either double quotation marks, or single quotation marks.
// 

Syntax:
// explode(separator,string,limit)



// explode() 
// function a string to convert in array.
// explode() function return string to array
// The "separator" parameter cannot be an empty string.
// limit Specifies the number of array elements to return.

// used in space separator
$str = "Hello world. It is a beautiful day.";
$array = explode(" ", $str);
echo "<pre>";
print_r($array);
echo "</pre>";



// used for . separator
$strings = "Hello world. It is a beautiful day.";
$array1 = explode(".", $strings);
echo "<pre>";
print_r($array1);
echo "</pre>";



// used index (limit)3
$strings1 = "Hello world. It is a beautiful day.";
$array2 = explode(" ", $strings1, 3);
echo "<pre>";
print_r($array2);
echo "</pre>";

// used index (limit) -3
$strings1 = "Hello world. It is a beautiful day.";
$array2 = explode(" ", $strings1, -1);
echo "<pre>";
print_r($array2);
echo "</pre>";



// ************************************************************************************************************
// Implode()
// The implode() function returns a string from the elements of an array.
// Implode and join function same work.

// Syntax :-
// implode(separator,array)

// array to strings
$array = array('Hello', 'World', 'Beautiful', 'day');
$str1 = implode(" ", $array);
echo $str . "<br>";

// used add for text
$arrays = array('Hello', 'World', 'Beautiful', 'day');

$strs1 = implode(" add ", $arrays);
echo $strs1;
