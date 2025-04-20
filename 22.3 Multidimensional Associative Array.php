<?php
// Multidimensional Associative Array 
// Multidimensional arrays store multiple arrays whereas associative arrays store key-value pairs as data. Grouped relation between data can be stored in multidimensional associative arrays.


// Multidimensional Associative Array used
$marks = [
    "dalveer" => [
        "physics" => 85,
        "maths" => 87,
        "html" => 89
    ],
    "dharmveer" => [
        "physics" => 85,
        "maths" => 77,
        "html" => 59
    ]
];
echo "<pre>";
print_r($marks);
echo "</pre>";


//  Multidimensional Associative Array  use foreach Loop in program
$marks1 = [
    "dalveer" => [
        "physics" => 85,
        "maths" => 87,
        "html" => 89
    ],
    "dharmveer" => [
        "physics" => 85,
        "maths" => 77,
        "html" => 59
    ],
    "dalveersingh" => [
        "physics" => 85,
        "maths" => 87,
        "html" => 89
    ]
];
foreach ($marks1 as $key => $v1) {
    echo $key;
    foreach ($v1 as $v2) {
        echo $v2;
    }
    echo "<br>";
}
