<?php
// Used with numeric values to write a value to a variable left to right
// x = y	x = y	The left operand gets set to the value of the expression on the right	
// x += y	x = x + y	Addition	
// x -= y	x = x - y	Subtraction	
// x *= y	x = x * y	Multiplication	
// x /= y	x = x / y	Division	
// x %= y   x = x % y	Modulus


$x = 10;
echo $x;  //10

$a = 50;
$a -= 30;
echo $a; //20

$b = 5;
$b *= 6;
echo $b; //30

$c = 20;
$c += 100;
echo $c;  //12

$n = 15;
$n %= 4;
echo $n;  //03
