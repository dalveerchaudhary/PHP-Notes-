
<?php
// Local Variables :-
// Definition: Declared within a function or code block. 
// Scope: Limited to the function or code block in which they are defined. 
// Accessibility: Can only be accessed from within that specific function or code block.  
function test1()
{
    $a = 10;
    echo "This is Local Variables $a <br>";
}
test1();

// Global Variables :-
// Definition: Declared outside any function or code block. 
// Scope: Accessible from anywhere in the PHP script, including inside functions. 
// Accessibility: Can be accessed and modified from any part of the script. 

$x = 10;
$y = 20;

function test()
{
    global $x, $y;
    $x = $x + $y;
}
test();
echo "This is Global Variables $x <br>";



// Not work this program
function testing()
{
    global $a, $b;
    $a = $a + $b;
}
testing();
echo "This is Global Variables $a";
$a = 10;
$b = 20;
