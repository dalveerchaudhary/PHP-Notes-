<?php
// substr()
// function returns a part of a string.

// string ::- Required. Specifies the string to return a part of
// start ::- Required. Specifies where to start in the string
//      A positive number - Start at a specified position in the string
//      A negative number - Start at a specified position from the end of the string
//      0 - Start at the first character in string
// length ::- Optional. Specifies the length of the returned string. Default is to the end of the string.
//      A positive number - The length to be returned from the start parameter
//      Negative number - The length to be returned from the end of the string
//      If the length parameter is 0, NULL, or FALSE - it return an empty string


// Syntax :-
// substr(string,start,length)

// used start
$str = "Hello world. the world is nice";
echo substr($str, 6) . "<br>";

$str = "Hello world. the world is nice";
echo substr($str, -12) . "<br>";

// used for start to length
$str = "Hello world. the world is nice";
echo substr($str, 0, 16) . "<br>";

$str = "Hello world. the world is nice";
echo substr($str, 10, 12) . "<br>";
