<?php
// array_replace()
// Index or Associative Array  
// If a key from array1 exists in array2, values from array1 will be replaced by the values from array2   
// Use array_replace when you only need to replace values in the top-level elements of an array. 

Syntax:
// array_replace(array1, array2, array3, ...)



// array_replace used Index array
$fruit1 = ['orange', 'banana', 'apple', 'grapes'];

$color = ['red', 'green', 'blue'];
$newArray1 = array_replace($fruit1, $color);
echo "<pre>";
print_r($newArray1);
echo "<pre>";


// array_replace used associative array
$fruit = ['orange', 'banana', 'a' => 'apple', 'grapes'];
$veggie = ['a' => 'carrot', 1 => 'pea'];

$newArray = array_replace($fruit, $veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";



//***************************************************************************************************************** */
// Array_replace_recursive()
// Use array_replace_recursive when you need to replace values within nested arrays as well. 
// 




// Multidemensional Associative Array
$array1 = array("a" => array("red"), "b" => array("green", "pink"));

$array2 = array("a" => array("yellow"), "b" => array("black"));

$newArray1 = array_replace_recursive($array1, $array2);

echo "<pre>";
print_r($newArray1);
echo "</pre>";
