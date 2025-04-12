<?php
// used to execute the same block of code again and again, as long as a certain condition is true.
// While Loop
// while loop executes a block of code as long as the specified condition is true.

// First format 
$a = 1;
while ($a <= 5) {
    echo "dalveer singh<br>";
    $a = $a + 1;
}

// second format 
$a = 1;
while ($a <= 5) {
    echo "dalveer<br>";
    $a++;
}
// add numbers
$a = 1;
while ($a <= 5) {
    echo $a .  "numbers<br>";
    $a++;
}

// use html
$a = 1;
echo "<ul>";
while ($a <= 5) {
    echo "<li>" . $a .  "html </li>";
    $a++;
}
echo "</ul>";

// increase the counter by 10 instead
$i = 0;
while ($i < 100) {
    $i += 10;
    echo "$i<br>";
}
