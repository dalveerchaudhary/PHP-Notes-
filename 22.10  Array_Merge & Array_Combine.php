<?php
//  Array_Merge() 
// index or Associative Array
// The array_merge() function merge one or more arrays into one array.


// index array Array_merge()
$fruit = ["orange", "banana", "grapes"];

$veggie = ['carrot', 'pea'];

$newArray = array_merge($fruit, $veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";



// **********************************************************************************************************
// array_merge_recursive()
// 
$fruit1 = ['a' => "orange", 'b' => "banana", 'c' => "grapes"];
$veggie1 = [
    'b' => ['color' => ['red', 'blue', 'green']],
    'e' => 'pea',
    55,
    68
];
$newArray1 = array_merge_recursive($fruit1, $veggie1);

echo "<pre>";
print_r($newArray1);
echo "</pre>";





// **********************************************************************************************************
// Array_Combine()
// index Array
// The array_combine() function creates an array by using the elements from one "keys" array and one "values" array.
// arrays must have equal number of elements!

$name = array("ram", "mohan", "dalveer");

$age = array("35", "37", "43");

$newArray3 = array_combine($name, $age);

echo "<pre>";
print_r($newArray3);
echo "</pre>";
