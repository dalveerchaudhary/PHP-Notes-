<?php
// Strlen() 
// function returns the length of a string.

// Syntax :-
//  strlen(string)

$str = "dalveer singh";
echo strlen($str);  // 13



// ************************************************************************************ 
// Str_word_count() 
// function counts the number of words in a string.

// string ::-	Required. Specifies the string to check
// return ::-	Optional. Specifies the return value of the str_word_count() function Possible values:
// 0 - Default. Returns the number of words found
// 1 - Returns an array with the words from the string
// 2 - Returns an array where the key is the position of the word in the string, and value is the actual word
// char ::- 	Optional. Specifies special characters to be considered as words.


// Syntax :-
//  str_word_count(string,return,char)

// used for string 
$str1 = "Hello world dalveer singh";
echo str_word_count($str1); // 4

// used for string to return 1
$str2 = "Hello world dalveer singh";
$array = str_word_count($str2, 1);

echo "<pre>";
print_r($array);
echo "</pre>";

// used for string to return 2
$str3 = "Hello world dalveer singh";
$array1 = str_word_count($str3, 2);

echo "<pre>";
print_r($array1);
echo "</pre>";




// *************************************************************************************
//  substr_count() 
// function counts the number of times a substring occurs in a string.
// The substring is case-sensitive.

// string ::-  Required. Specifies the string to check
// substring ::-  Required. Specifies the string to search for
// start ::-  Optional. Specifies where in string to start searching. If negative, it starts counting from the end of the string
// length ::-  Optional. Specifies the length of the search

// Syntax :-
// substr_count(string,substring,start,length)

$strs = "hello dalveer my name dalveer singh";
echo substr_count($strs, "dalveer", 1, 30);
