<?php
// Function is a piece of code that takes another input in the form of a parameter, processes it, and then returns a value. 


// Call the function just write it name followed by ()
function name()
{
    echo "dalveer singh <br>";
}
name();



//Parameters multi time used 
function name1($fnam, $lnam)
{
    echo "Hello $fnam $lnam <br>";
}
name1("dalveer", "singh");
name1("jaipur", "Royal green");


//Functions with return value and percentage
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


// Functions with Argument
function test() {}
