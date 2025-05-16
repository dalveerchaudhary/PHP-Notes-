<?php
// str_replace() 
// function replaces some characters with some other characters in a string.
// This function is case-sensitive

// find ::-  Required. Specifies the value to find
// replace	 ::-  Required. Specifies the value to replace the value in find
// string ::-  Required. Specifies the string to be searched
// count ::-  Optional. A variable that counts the number of replacements

// Syntax :-
// str_replace(find,replace,string,count)


$str = "Hello world. the world is nice ";
echo str_replace("world", "Earth", $str) . "<br>";

$str1 = "Hello world. the world is nice ";
$find = ["Hello", "world"];
$replace = ["Hii", "earth"];

echo str_replace($find, $replace, $str1) . "<br>";

// str_ireplace() 
// function replaces some characters with some other characters in a string.
// This function is case-insensitive

// find ::-  Required. Specifies the value to find
// replace	 ::-  Required. Specifies the value to replace the value in find
// string ::-  Required. Specifies the string to be searched
// count ::-  Optional. A variable that counts the number of replacements


// Syntax :-
// str_ireplace(find,replace,string,count)

$str = "Hello world. the world is nice ";
echo str_ireplace("world", "Earth", $str) . "<br>";

$str1 = "Hello world. the world is nice ";
$find = ["HELLO", "WORLD"];
$replace = ["Hii", "earth"];

echo str_ireplace($find, $replace, $str1) . "<br>";




// substr_replace() 
// function replaces a part of a string with another string.

// string ::-  Required. Specifies the string to check
// replacement ::-	Required. Specifies the string to insert
// start ::-   Required. Specifies where to start replacing in the string
//             A positive number - Start replacing at the specified position in the string
//             Negative number - Start replacing at the specified position from the end of the string
//             0 - Start replacing at the first character in the string
// length ::-  Optional. Specifies how many characters should be replaced. Default is the same length as the string.
//             A positive number - The length of string to be replaced
//             A negative number - How many characters should be left at end of string after replacing
//             0 - Insert instead of replace

// Note ::- If the start parameter is a negative number and length is less than or equal to start, length becomes 0.


// Syntax :-
// substr_replace(string,replacement,start,length)

$str = "Hello world. the world is nice";
echo substr_replace($str, "earth", 6, 10) . "<br>";

$str = "Hello world. the world is nice";
echo substr_replace($str, "earth", 6, -5) . "<br>";




// strtr()
// function translates certain change multi characters in a string.

// Note ::- If the from and to parameters are different in length, both will be formatted to the length of the shortest.


// string ::-  Required. Specifies the string to translate
// from ::-  Required (unless array is used). Specifies what characters to change
// to ::-  Required (unless array is used). Specifies what characters to change into
// array ::-  Required (unless to and from is used). An array containing what to change from as key, and what to change to as value


// Syntax :-
// strtr(string,from,to)
//     or
// strtr(string,array)


$str = "Hello world. the world is nice";
echo strtr($str, "world", "dalveer") . "<br>";

// used for array 
$str = "Hello world. the world is nice";
$array = ["Hello" => "Hii", "world" => "earth"];
echo strtr($str, $array);
