<?php
// Associative array is a data structure that stores data as key-value pairs

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
