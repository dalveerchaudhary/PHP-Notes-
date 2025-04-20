<?php
// 

$emp = [
    [1, "dalveer", "developer", 50000],
    [2, "dharmveer", "web developer", 200000],
    [3, "neta", "designer", 50000],
    [4, "anoop", "web designer", 50000]
];

foreach ($emp as list($id, $name, $designation, $salary)) {
    echo "$id $name $designation $salary <br>";
}
