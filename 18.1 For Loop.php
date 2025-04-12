<?php
//

Syntax:
// for (initialization;condition;increment/decrement) {
// statement
// }


//
for ($a = 1; $a <= 10; $a++) {
    echo " Hello <br>";
}

// Counting Number
for ($a = 1; $a <= 10; $a++) {
    echo $a . ". Hello <br>";
}

// Three number increment
for ($a = 1; $a <= 20; $a = $a + 3) {
    echo $a . ". increment <br>";
}

//decrement 
for ($a = 10; $a >= 1; $a--) {
    echo $a . ". Decrement <br>";
}
