<?php
// Nested loop is the method of using the for loop inside the another for loop. 


for ($a = 1; $a <= 100; $a = $a + 10) {
    for ($b = $a; $b < $a + 10; $b++) {
        echo $b . " ";
    }
    echo  "<br>";
}
