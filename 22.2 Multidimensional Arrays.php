<?php
// Multidimensional Array same used Nested Array Index Array
// In the previous pages, we have described arrays that are a single list of key/value pairs
// For a two-dimensional array you need two indices to select an element
// multidimensional array is an array where each element is itself another array, creating a nested structure


// Multidimensional Array
$mulit = [
    [1, "dalveer", "singh", 50000],
    [2, "dharmveer", "singh", 200000]
];
echo $mulit[1][1] . "<br>";



//  Multidimensional Array used for Loop
$mul = [
    [1, "dalveer", "singh", 50000],
    [2, "dharmveer", "singh", 200000],
    [3, "dalveer", "singh", 50000],
    [4, "dharmveer", "singh", 200000]
];
for ($row = 0; $row < 4; $row++) {
    for ($col = 0; $col < 4; $col++) {
        echo $mul[$row][$col] . " ";
    }
    echo "<br>";
}
//  Multidimensional Array used foreach Loop
$mul = [
    [1, "dalveer", "singh", 50000],
    [2, "dharmveer", "singh", 200000],
    [3, "dalveer", "singh", 50000],
    [4, "dharmveer", "singh", 200000]
];
foreach ($mul as $v1) {
    foreach ($v1 as $v2) {
        echo $v2 . " ";
    }
    echo "<br>";
}

//  Multidimensional Array used foreach Loop create Table
$mul = [
    [1, "dalveer", "singh", 50000],
    [2, "dharmveer", "singh", 200000],
    [3, "dalveer", "singh", 50000],
    [4, "dharmveer", "singh", 200000]
];
echo "<table border='2px' cellpadding='2px' cellspacing='0'>";
echo "<tr>
   <th>Emp Id </th>
   <th>Emp Name </th>
   <th>Designation </th>
   <th>Salary </th>
</tr>";

foreach ($mul as $v1) {
    echo "<tr>";

    foreach ($v1 as $v2) {
        echo "<td>$v2 </td>";
    }
    echo "<tr>";
}
echo "</table>";
