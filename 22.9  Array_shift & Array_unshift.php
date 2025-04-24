<?php
//  Array_shift()
// array_shift() function removes the first element an array, and returns the value of the removed element

$fruit = ["orange", "banana", "grapes"];
array_shift($fruit);

echo "<pre>";
print_r($fruit);
echo "</pre>";







//*********************************************************************************************************************** */
// Array_unshift
// Array_unshift() function inserts new elements to an array. The new array values will be inserted in the beginning of the array.

$fruit1 = ["orange", "banana", "grapes"];
array_unshift($fruit1, "apple", "lemon");

echo "<pre>";
print_r($fruit1);
echo "</pre>";
