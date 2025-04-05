<?php
//AND Operators run only when both all conditions must be true program run
//  &&
// OR Operators run only when either one conditions must be true program run
//  ||
// NOT  boolean value true becomes change false, and vice versa. (true to false) (false to true)
// NOT 
// XOR used to return true if only one of the conditions is true.
// XOR


//AND Operators run only when both all conditions must be true program run
$x = 10;
$y = 50;
if ($x == 10 && $y == 50) {
    echo "Hello world 1 <br>";
}

// OR Operators run only when either one and all conditions must be true program run
$a = 100;
$b = 50;
if ($a == 10 || $b == 50) {
    echo "Hello world 2 <br>";
}


// NOT  boolean value true becomes change false, and vice versa. (true to false) (false to true)
$d = 100;
if (!($d == 90)) {
    echo "Hello world 3<br>";
}


// XOR used to return true if only one of the conditions is true.
// $a = true;
// $b = false;
// if ($a xor $b) {
//     echo "Only one is true.";
// }
$x = 100;
$y = 50;
if ($x == 100 xor $y == 80) {
    echo "Hello world";
}

?>
<h1></h1>