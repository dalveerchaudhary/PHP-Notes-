<?php
// The list() function is used to assign values to a list of variables in one operation
// List() function only worked on numerical arrays.


Syntax:
// list(var1, var2, ...)

$emp = [
    [1, "dalveer", "developer", 50000],
    [2, "dharmveer", "web developer", 200000],
    [3, "neta", "designer", 50000],
    [4, "anoop", "web designer", 50000]
];

foreach ($emp as list($id, $name, $designation, $salary)) {
    echo "$id $name $designation $salary <br>";
}


// list function use to create table index Array
$emp = [
    [1, "dalveer", "developer", 50000],
    [2, "dharmveer", "web developer", 200000],
    [3, "neta", "designer", 50000],
    [4, "anoop", "web designer", 50000]
];
echo "<table border='2px' cellpadding='5px' cellspacing='0px'>
   <tr>
   <th>Emp Id.</th>
   <th>Name</th>
   <th>Designation</th>
   <th>Salary</th>
   </tr> ";
foreach ($emp as list($id, $name, $designation, $salary)) {
    echo "<tr> <td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary </td> <tr> <br>";
}
echo "</table>";

// list function use to create table Associative Array
$associative = [
    [
        "id" => 1,
        "name" => "dalveer",
        "designation" => "Manager",
        "salary" => 50000
    ],
    [
        "id" => 2,
        "name" => "dharmveer",
        "designation" => "designer",
        "salary" => 15000
    ],
    [
        "id" => 3,
        "name" => "neta",
        "designation" => "developer",
        "salary" => 5000
    ],
    [
        "id" => 3,
        "name" => "neta",
        "designation" => "developer",
        "salary" => 5000
    ]
];
echo "<table border='2px' cellpadding='5px' cellspacing='0px'>
   <tr>
   <th>Emp Id.</th>
   <th>Name</th>
   <th>Designation</th>
   <th>Salary</th>
   </tr> ";
foreach ($associative as list("id" => $id, "name" => $name, "designation" => $designation, "salary" => $salary)) {
    echo "<tr> <td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary </td> <tr> <br>";
}
echo "</table>";
