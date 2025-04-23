<?php
// 0 - Default. Does not count all elements of multidimensional arrays
// 1 - Counts the array recursively (counts all the elements of multidimensional arrays)
// check Get the Length of an Array use
// Count()  function returns the number of elements in an array
// Sizeof() function returns the number of elements in an array.
// array_count_values()




Syntax:
// sizeof(array, mode)

// First Program
$food = array('orange', 'banana', 'apple', 'grapes');
// echo count($food);       // used count Length 4
// echo sizeof($food);     // used sizeof Length 4


// Second Program Multidimensional Array 
$foods = array(
    'fruit' => array('orange', 'banana', 'apple'),
    'veggie' => array('cattot', 'collard', 'pea')
);
// echo count($foods);
// echo count($foods, 1);
// echo count($foods['fruit']);
// echo count($foods);


// Thard Program used For Loop 
$forloop = array('orange', 'banana', 'apple', 'grapes');

$len = count($forloop);

for ($i = 0; $i < $len; $i++) {
    echo $food[$i] . "<br>";
}

//************************************************************************************************* */

//  Array_count_values() function used with print_r()
$forloop = array('orange', 'banana', 'apple', 'grapes', 'banana');

echo "<pre>";
print_r(array_count_values($forloop));
echo "</pre>";
