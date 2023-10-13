<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// variables
$var = 1; // int
$number = 50;
echo "var = $var";
$var = 12;
echo "<br>var = " . $var;
echo "<br>" . $number . $var;
echo "<br><br>";
echo $number, $var;
// var types
$var1 = 0.55; // float
$var2 = -0.45;
$var3 = "string"; // string
$str = "hello";
$var4 = [1, 2, 3, 4, 5];
$var5 = true; // boolean
//echo $var1, $var2, $var3;
echo $var3 . $str;
// const
const PI = 3.14; // new method
// or use define
define("MY_AGE", 100); // pops up IDE warning
echo "<br><br>" . PI;
if ($var1 != $var2)
{
    echo PI . "<br>";
    echo MY_AGE;
}
?>
</body>
</html>