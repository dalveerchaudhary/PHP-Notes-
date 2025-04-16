<!--  -->
<?php
// What is an Array :-
// An array is a special variable that can hold many values under a single name, and you can access the values by referring to an index number or name.


// Indexed Arrays :-
// In indexed arrays each item has an index number.
// By default, the first item has index 0, the second item has item 1, etc.

// Array First Write Program Old Syntax.
$colors = array("Red", 44, "green", 12.40);
echo $colors[0] . "<br>";
echo $colors[1] . "<br>";
echo $colors[2] . "<br>";
echo $colors[3] . "<br>";

// Array Second Write Program 
$color = ["Blue", 22, "green", 19.12];
echo $color[0] . "<br>";
echo $color[1] . "<br>";
echo $color[2] . "<br>";
echo $color[3] . "<br>";

// Used print_r() Function 
$pcolor = ["Blue", 22, "green", 19.12];
echo "<pre>";  // used manage structure
print_r($pcolor);
echo "</pre>";

// Used Array and for Loop Program
$namecolor = ["red", 66, "pink", 88.09];

for ($i = 0; $i < 4; $i++) {
    echo $namecolor[$i] . "<br>";
}
