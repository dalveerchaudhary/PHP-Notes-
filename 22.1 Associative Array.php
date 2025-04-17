<?php
// Associative array is a data structure that stores data as key-value pairs
// To access an array item you can refer to the key name.
// 

// Old Syntex 
$age = array("dalveer" => 25, "dharmveer" => 28);
echo $age["dalveer"] . "<br>";
echo $age["dharmveer"] . "<br>";

// New Syntex
$age = ["dalveer" => 26, "dharmveer" => 29];
echo $age["dalveer"] . "<br>";
echo $age["dharmveer"] . "<br>";

// Check Datatype
$age = ["dalveer" => 26, "dharmveer" => "bhai"];
echo "<pre>";
var_dump($age);    // Check Datatype
echo "</pre>";

echo $age["dalveer"] . "<br>";
echo $age["dharmveer"] . "<br>";


// To change the value of an array item, use the key name
$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1998);
$car["year"] = 2025;
var_dump($car);
