<?php

$list = [4, 5, 12, 9, -2, 321];
print_r($list); // output array (for developers only)

echo "<br>";

unset($list[1]); // removes element from array (indexes not changed)
print_r($list);

echo "<br>";

$list = array_values($list); // restores indexes
print_r($list);

echo "<br>";

sort($list); // array sorting
print_r($list);

echo "<br>";

rsort($list); // reversed sorting
print_r($list);

echo "<br>";

//shuffle($list); // shuffles randomly array
//print_r($list);

//echo "<br>";

echo in_array(100, $list); // empty string -- false
echo in_array(4, $list); // 1 -- true

if (!in_array(100, $list)) echo "not found";
else echo "found";

echo "<br>";
echo "<br>";

$array = array_slice($list, 2, 2);
//print_r($array);
var_dump($array); // equals to print_r() func

echo "<br>";

$arr1 = [1, 2, 3];
$arr2 = [4, 5 ,6];
$arr3 = array_merge($arr1, $arr2); // concatenate arrays
print_r($arr3);

echo "<br>";

$var = 0.5;
echo gettype($var); // returns data type of var
$str = "qwerty";
echo gettype($str);
echo is_numeric($var); // returns 1 if var is digit, else returns empty string
echo is_integer($var); // is integer (strong)
//is_double();
//is_array();
//is_string();
//is_bool();

echo "<br>";
echo "<br>";
$string = "string";
echo strpos($string, "s"); // finds els in array and returns index

echo "<br>";
echo "<br>";
echo "<br>";
$words = "a b c d e f g";
$arr = explode(" ", $words);
print_r($arr);
echo "<br>";
$res = implode("; ", $arr);
print_r($res);