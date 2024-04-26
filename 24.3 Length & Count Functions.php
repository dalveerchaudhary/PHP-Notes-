<?php
// Strlen() 
// function returns the length of a string.

// Syntax :-
//  strlen(string)

$str = "dalveer singh";
echo strlen($str);  // 13



// *************************************************************************************

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

$str1 = "Hello world dalveer singh";
echo str_word_count($str1);








// *************************************************************************************
// 