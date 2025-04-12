<?php
// Continue 
// Continue statement stops the current iteration in the all loop and continue with the next.

//Break
// break statement can be used to jump out of a all loop


// Continue used this statement
for ($a = 1; $a <= 10; $a++) {
    if ($a == 3) {
        echo "No : " . $a . "<br>";
        continue;
    }
    echo "Number : " . $a . "<br>";
}


// break text statement
for ($a = 1; $a <= 10; $a++) {
    if ($a == 3) {
        echo "No : " . $a . "<br>";
        break;
    }
    echo "Number : " . $a . "<br>";
}
