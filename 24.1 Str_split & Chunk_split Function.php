<?php
// str_split()
// The str_split() function splits a string into an array convart index .

// Syntax :-
// str_split(string,length)

$str = "dalveer singh";
$array = str_split($str);

echo "<pre>";
print_r($array);
echo "</pre>";


// all index used for two character print
$str = "dalveer singh";
$array = str_split($str, 2);

echo "<pre>";
print_r($array);
echo "</pre>";






// *************************************************************************************************************
// chunk_split() 
// Function is used to split a string into smaller chunks of a specific length and add for end.
// $string: This parameter specifies a string which is needed to be chunked.
// $length: This parameter specifies an integer which specifies the chunk length. That is the length of the chunked parts.
// $end: This parameter specifies the line ending sequence.

// Syntax :-
// chunk_split(string,length,end)


// add for end used - two character print
$str1 = "dalveer singh";
$newstr = chunk_split($str1, 2, "-");
echo $newstr;
