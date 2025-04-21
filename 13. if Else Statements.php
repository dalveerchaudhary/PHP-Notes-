<?php
// Statement executes some code if a condition is true and another code if that condition is false.

Syntax:
// if (condition) {
// code to be executed if condition is true;
// } else {
// code to be executed if first condition is false and this condition is true;
// }




$t = 6;

if ($t < 20) {
    echo "Have a good day <br>";
} else {
    echo "Have a not good day <br>";
}

//
$name = "dalveer singh";
$gender = "mail";
if ($gender == "mail") {
    echo "Hello Mr." . $name;
} else {
    echo "Hello Miss." . $name;
}
