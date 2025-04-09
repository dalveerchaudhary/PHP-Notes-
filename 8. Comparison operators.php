<?php
// Value Equal 
//== Equal to / $x == $y 
$x = 100;
$y = "100";
var_dump($x == $y);


// Value Equal and DataType Equal
//=== Equal value and equal type / $x === $y 
$x = 100;
$y = "100";
var_dump($x === $y);


//!= Not equal  / $x != $y
$x = 10;
$y = "100";
var_dump($x != $y);

//<> Not equal / $x <> $y
$x = 100;
$y = "100";
var_dump($x <> $y);

// !== Not equal value or not equal data Type  / $x !== $y
$x = 100;
$y = "100";
var_dump($x !== $y);


// > Greater than  / $x > $y
$x = 100;
$y = 500;
var_dump($x > $y);


// < Less than  / $x $y
$x = 100;
$y = 500;
var_dump($x < $y);


//>= Greater than or equal to  /  $x x> $y
$x = 50;
$y = 50;
var_dump($x >= $y);


//<= Less than or equal to  / $x <= $y
$x = 50;
$y = 50;
var_dump($x <= $y);
echo "<br>";



// <=> Spaceship $x<=> $y
$x = 5;
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y
