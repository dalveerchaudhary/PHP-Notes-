<?php
// Foreach loop is a control structure used to iterate over elements in an array or an object

// Foreach Loop Work this Program
$color = ["red", "green", "yellow"];
foreach ($color as $value) {
    echo $value . "<br>";
}


// Associative Array foreach Loop used
// First Program
$age = ["dalveer" => 25, "dharmveer" => 28];

foreach ($age as $value) {
    echo $value . "<br>";
}

// Second Program

// Print both the key and the value from array
$age = ["dalveer" => 26, "dharmveer" => 27];

foreach ($age as $key => $value) {
    echo $key . $value . "<br>";
}
