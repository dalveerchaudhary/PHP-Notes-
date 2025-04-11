<?php
// conditional expression provides a shorthand way return if the condition is true, and false 
// Single conditional used 

Syntax:
// variable = (condition) ? expression True : expression False;

//
$f = 10;
($f > 20) ? $g = "name greater "  : $g = "name smaller <br>";
echo $g;

// Simple 
$d = 32;
$b = ($d > 20) ? "Greater to yes " : "Smaller to yes";
echo $b;

// Whaout used () 
$a = 22;
$c = $a > 20 ? "Greater to  " : "Smaller to";
echo $c;


// Concatenate use the . operator add group ()
$x  = 15;
$z = "Value is :" . ($x > 20 ? "Greater" : "Smaller");
echo $z;
