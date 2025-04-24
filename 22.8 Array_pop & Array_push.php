<?php
// The array_pop() function deletes the last element of an array.

$fruit = ['orange', "banana", 'apple', 'grapes'];
array_pop($fruit);
echo "<pre>";
print_r($fruit);
echo "</pre>";





//**************************************** */
// array_push function add the last element of an array.
$fruit1 = ['orange', "banana", 'apple', 'grapes'];

array_push($fruit1, "apple", "guava");

echo "<pre>";
print_r($fruit1);
echo "</pre>";
