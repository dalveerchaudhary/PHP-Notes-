<?php
// in_array
// function is an inbuilt function in PHP that is used to check whether a given value exists in an array or not. It returns TRUE if the given value is found in the given array, and FALSE otherwise.

// Syntax :
// in_array(value, array, strict)

$food = array('orange', 'banana', 'apple', 'grapes');
echo in_array('papayae', $food);  // false
echo in_array('banana', $food);  // true


// in_array used for Loop 
$food1 = array('orange', 'banana', 'apple', 'grapes');
if (in_array('banana', $food1)) {
    echo "find Successfully. <br>";  // true
} else {
    echo "can't find.<br>";   // false
}

// used true keyword
$food2 = array('orange', 'banana', 'apple', '55', 'grapes');
if (in_array(55, $food2, true)) {
    echo "find Successfully.<br>";  // true
} else {
    echo "can't find.<br>";    // false
}

// in_array used multidimensional arrays  and use true
$a = array(array('p', 'h'), array('p', 'r'), 'o');
if (in_array(array('p', 'h'), $a, true)) {
    echo "find successfully.<br>";
} else {
    echo "can't find. <br>";
}


// *******************************************************************************************************************
// array_search()
// function search an array for a value and returns the key and index 

// Syntax:
// array_search(value, array, strict)


// return index
$foods = array('orange', 'banana', 'apple', 'grapes');

echo array_search('apple', $foods);

// associative array used 
// return key
$b = array('a' => 'orange', 'b' => 'banana', 'c' => 'apple', 'd' => 'grapes');
echo array_search('apple', $b);
