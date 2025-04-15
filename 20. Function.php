<?php
// Function is a piece of code that takes another input in the form of a parameter, processes it, and then returns a value. 


// Call the function just write it name followed by ()
function name()
{
    echo "dalveer singh <br>";
}
name();



// Parameters multi time used 
// Declared within the parentheses of the function definition. 
// Serve as placeholders for the values that will be passed to the function
function name1($fnam, $lnam)
{
    echo "Hello $fnam $lnam <br>";
}
name1("dalveer", "singh");
name1("jaipur", "Royal green");


// Functions with return value and percentage
function sum($c, $java, $php, $react)
{
    $s = $c + $java + $php + $react;

    return $s;
}
function percentage($st)
{
    $per = $st / 3 . "% <br>";

    echo $per;
}
$total = sum(62, 51, 83, 96);
echo $total;
percentage($total);


// Functions with Arguments
// PHP supports passing arguments by value (default), passing by reference, and even default argument values. 
// Passing Arguments by Value: 
// A copy of the argument's value is passed to the function, so changes inside the function do not affect the original variable. 

function test($string) {}
$str = "This is a Passing Arguments by Value <br>";
test($str);
echo $str;


// Passing Arguments By reference:
// The original variable is passed to the function, so changes inside the function directly modify the original variable. 
// This is indicated by using the & symbol before the parameter name in the function definition.  
function testing(&$string)
{
    $string = "this is not a Passing Arguments By reference <br>";
}
$str = "This is a Passing Arguments by Value <br>";
testing($str);
echo $str;


// Variable Functions call

// Call used in variable 
function wow($na)
{
    echo "Hello $na";
}
$func = "wow";         // Store function name in variable
$func("dharmveer singh <br>"); // Call function using variable



// Anonymous Functions
// Anonymous function, also called a closure, is a function without a specified name
$sayhello = function ($name) {
    echo "Hello $name";
};
$sayhello("dalveer singh");

// Recursive Function 
function display($number)
{
    if ($number <= 5) {
        echo "$number <br>";
        display($number + 1);
    }
}
display(0);
// Factorial Number
