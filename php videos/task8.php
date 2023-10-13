<?php
// cycles
// for

for($i = 0; $i < 5; $i++)
{
    echo $i;
}
echo "<br>| ";
// while
$j = 10;
while($j <= 20)
{
    echo $j . " | ";
    $j += 2;
}
echo "<br>| ";

// infinity cycle
/*
while(true)
{
    // code
}
*/

// do-while
$k = 10;
do
{
    echo $k . " | ";
    $k--;
} while($k > 0);
echo "<br>";
echo "<br>";

// non standard cycles
for($el = 100; $el > 10; $el /= 2)
{
    if ($el < 15) break; // break the cycle
    if ($el % 2 == 0) continue; // skip iteration
    echo $el . " | ";
}
echo "<br>";

// cycles for arrays
$list = [75, 2, 0.5, 0.4, 12, 23];
for($i = 0; $i < count($list); $i++)
{
    echo "element $i: $list[$i]<br>";
}
echo "<br>";

$dict = ["name" => "Alex", "age" => 12, "hobby" => "skate"];
foreach ($dict as $key => $value)
{
    echo "key: $key; value: $value<br>";
}
echo "<br>";

foreach ($list as $value)
{
    echo "$value | ";
}
echo "<br>";

foreach ($list as $i => $value)
{
    echo "index: $i; value: $value<br>";
}