<?php
// arrays: indexed and associative
// indexed:
// array function
$nums = array(1, 2, 3, 4, 5, 6, 7);
echo $nums[5] . "<br>"; // output 6th element of array (5 index)
echo $nums[0] . "<br>";

$arr = []; // empty array, [] -- is a simple method to create array
$array1 = [1, "vec", 0.34]; // array with different var types
$array = ["one", "two", "three"];

// associative:
// key => value
$list = ["age" => 50, "name" => "Ivan", "hobby" => "skate"];
$example = ["age" => 25, "name" => "Bob", "hobby" => "football"];
foreach ($example as $key => $value)
{
    echo "$key : $value<br>";
}
echo "<br>";
$example["name"] = "Don";
foreach ($example as $key => $value)
{
    echo "$key : $value<br>";
}

// n-dim array
$matrix = [[], [], []];
// pretty
$table = [
    [1, 0, 3],
    [4, 12, 90],
    [0, 9, 0]
];
// output: first access to global array, second access to inner array
echo $table[0][2]; // 3
