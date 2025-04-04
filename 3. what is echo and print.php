
<?php
// Used echo show the output 
// Can output multiple values separated by commas 
// Does not return a value
// Can be used with or without parentheses
// speed Generally faster
// echo used in function

// The echo statement can be used with or without parentheses: echo or echo().
echo "Hello";
//same as:
// echo used in function
echo ("Hello");

// Used echo show the output multi value
echo "Hello ", "dalveer ", "singh <br> ";


// variables with the echo 
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
echo "<h2>$txt1</h2>";
echo "<p>Study PHP at $txt2</p>";

// using single quotes, variables have to be inserted using the . operator,
$txt1 = "Learning PHP";
$txt2 = "operator";
echo '<h2>' . $txt1 . '</h2>';
echo '<p>Study PHP at ' . $txt2 . '</p>';



//************************************************************************************************************************** */
// Print
// Can only output a single value.
// Always returns 1.
// speed slower than
// Can be used with or without parentheses.


// statement can be used with or without parentheses: print or print().
print "Hello";
//same as
// print used in function
print("Hello");


// print command notice that the text can contain HTML
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";


// shows to output Used variables with the print
$txt1 = "Learn";
$txt2 = "PHP";
print "<h2>$txt1</h2>";
print "<p>Study PHP at $txt2</p>";

// When using single quotes, variables have to be inserted using the . operator,
$txt1 = "Learning";
$txt2 = "php oop";

print '<h2>' . $txt1 . '</h2>';
print '<p>Study PHP at ' . $txt2 . '</p>';
