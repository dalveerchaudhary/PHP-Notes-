<?php
// strstr()
// strchr()
// function searches for the first occurrence of a string inside another return string .
// This function is case-sensitive.

// string ::- Required. Specifies the string to search
// search ::- Required. Specifies the string to search for. If this parameter is a number, it will search for the character matching the ASCII value of the number
// before_search ::- Optional. A boolean value whose default is "false". If set to "true", it returns the part of the string before the first occurrence of the search parameter.

// Syntax :-
// strstr(string,search,before_search)

$str = "hello world. the world is nice strstr";
echo strstr($str, "world") . "<br>";

$str = "hello world. the world is nice strstr";
echo strstr($str, "world", true) . "<br>" . "<br>";


// used for strchr() functions
$str = "hello world. the world is nice strchr";
echo strchr($str, "world") . "<br>";

$str = "hello world. the world is nice strchr";
echo strchr($str, "world", true) . "<br>" . "<br>";



// strrchr()
// function finds the position of the last reverse of a string within another string, and returns all characters from this position to the end of the string.
// This function is case-sensitive.

// string ::- Required. Specifies the string to search
// char ::- Required. Specifies the string to find. If this is a number, it will search for the character matching the ASCII value of that number

// Syntax :-
// strrchr(string,char)


$str = "hello world. the world is nice strrchr";
echo strrchr($str, "world") . "<br>" . "<br>";






// stristr()
// function searches for the first occurrence of a string inside another string.
// This function is case-insensitive


// string ::- Required. Specifies the string to search
// search ::- Required. Specifies the string to search for. If this parameter is a number, it will search for the character matching the ASCII value of the number
// before_search ::- Optional. A boolean value whose default is "false". If set to "true", it returns the part of the string before the first occurrence of the search parameter.


// Syntax :-
// stristr(string,search,before_search)

$str = "hello world. the world is nice stristr";
echo stristr($str, "WOrld") . "<br>";

$str = "hello world. the world is nice stristr";
echo stristr($str, "WORLD", true) . "<br>" . "<br>";


// strpbrk()
// function searches a string for any of the specified characters.
//  This function is case-sensitive.

// string ::- Required. Specifies the string to search
// charlist ::- Required. Specifies the characters to find

// Syntax :-
// strpbrk(string,charlist)

$str = "hello world. the world is nice stristr";
echo strpbrk($str, "wo") . "<br>";
