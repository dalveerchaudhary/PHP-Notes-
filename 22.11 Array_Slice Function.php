<?php
// array_slice()
// array_slice() is used to extract a portion of an array without modifying the original array.
// You don’t want to change the original array
// You want to extract a few items from an array
// 

Syntax:
// array_slice(array, start, length, preserve)


// 
$color = ["red", "green", "blue", "yellow", "brown"];
$newArray = array_slice($color, 1, 3);

echo "<pre>";
print_r($newArray);
echo "</pre>";


// using a negative value used true
$color1 = ["red", "green", "blue", "yellow", "brown"];
$newArray1 = array_slice($color1, -4, 4, true);

echo "<pre>";
print_r($newArray1);
echo "</pre>";


// numeric value
$color2 = ["0" => "red", "1" => "green", "2" => "blue", "3" => "yellow", "4" => "brown"];
$newArray2 = array_slice($color2, 1, 3,);

echo "<pre>";
print_r($newArray2);
echo "</pre>";




// **********************************************************************************************
// Array_Splice()
// Function removes selected elements from an array and replaces it with new elements. The function also returns an array with the removed elements. 

Synta:
// array_splice(array, start, length, array)


// remove value
$colors1 = ["red", "green", "blue", "yellow", "brown"];

array_splice($colors1, 2);
echo "<pre>";
print_r($colors1);
echo "</pre>";


// Negitive length
$colors2 = ["red", "green", "blue", "yellow", "brown"];

array_splice($colors2, 1, -2);
echo "<pre>";
print_r($colors2);
echo "</pre>";




// Remove to Replaces Value
$colors = ["red", "green", "blue", "yellow", "brown"];

$fruit = ["orange", "Apple"];

array_splice($colors, 2, 2, $fruit);
echo "<pre>";
print_r($colors);
echo "</pre>";
