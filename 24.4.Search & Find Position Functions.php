<?php
// strpos()
// function finds the position of the first occurrence of a string inside another string.
// The strpos() function is case-sensitive
// This function is binary-safe.

// string ::- Required. Specifies the string to search
// find	::- Required. Specifies the string to find
// start ::- Optional. Specifies where to begin the search. If start is a negative number, it counts from the end of the string.

// Syntax :-
// strpos(string,find,start)

$str = "hello world. the world is nice";
echo strpos($str, "world", 4) . "<br>";

$str1 = "hello world. the world is nice";
echo strpos($str1, "world", -19) . "<br>";


// strrpos() 
// function finds the position of the last occurrence of a string inside another string.
// The strpos() function is case-sensitive

// string ::- Required. Specifies the string to search
// find ::-  Required. Specifies the string to find
// start ::- Optional. Specifies where to begin the search

// Syntax :-
// strrpos(string,find,start)

$str2 = "hello world. the world is nice";
echo strrpos($str2, "world") . "<br>";




// stripos()
// function finds the position of the first occurrence of a string inside another string.
// The stripos() function is case-insensitive.

// string ::- Required. Specifies the string to search
// find ::- Required. Specifies the string to find
// start ::- Optional. Specifies where to begin the search


// Syntax :-
// stripos(string,find,start)






// strripos() 
// function finds the position of the last occurrence of a string inside another string.
// The strripos() function is case-insensitive.

// string ::- Required. Specifies the string to search
// find ::-  Required. Specifies the string to find
// start ::- Optional. Specifies where to begin the search

// Syntax :-
// strripos(string,find,start)