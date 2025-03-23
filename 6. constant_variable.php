<?php
// constant variables are global variables
// Cant use $ sign with constant variable name.
// not re define and value not re assign

define("test", 50);
// echo test;
$sum = test + 20;
echo $sum;   //output = 70
