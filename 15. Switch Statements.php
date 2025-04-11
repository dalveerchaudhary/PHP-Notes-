<?php
// Use the switch statement to select one of many blocks of code to be executed.
// The expression is evaluated once
// The value of the expression is compared with the values of each case
// If there is a match, the associated block of code is executed
// The break keyword breaks out of the switch block
// The default code block is executed if there is no match

Syntax:
// switch (expression) {
//   case label1:
//code block
// break;
//   case label2:
//code block;
// break;
//   case label3:
//code block
// break;
//   default:
//code block
// }


// Single Case used 
$weekday = 8;

switch ($weekday) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "wadnesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Enter valide Weekday";
}


// Multiple cases to use the same code block
$weekdaytime = 7;
switch ($weekdaytime) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "<br> Only Work not for party";
        break;

    case 6:
        echo "<br>Saturday party time";
        break;
    case 7:
        echo "<br> Sunday shoping time";
        break;
    default:
        echo "<br> Enter valide Weekday";
}

// logic example
$age = 19;

switch ($age) {
    case ($age >= 18 && $age <= 21):
        echo "<br> you are eligible";
        break;
    case ($age >= 21 && $age <= 30):
        echo "<br> you are not eligible";
        break;
    default:
        echo "<br> Enter the valid numbers";
}
