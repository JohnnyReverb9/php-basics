<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// math operations
$x = 10;
$y = 12;
echo "sum: " . $x + $y . "<br>";
echo "dif: " . $x - $y . "<br>";
echo "mul: " . $x * $y . "<br>";
echo "div: " . $x / $y . "<br>";
echo "mod: " . $y % $x . "<br>";

// increment
// $x = $x + 1;
// $x += 1;
// $x++;

// pi -- global const
echo M_PI . "<br>";
echo M_E . "<br>";

// abs (module)
echo abs(-22) . "<br>";
// ceil (round to big)
echo ceil(3.9);
// floor (round to small)
echo "\n" . floor(3.9) . "\n";
// round(num, digits after point (precision, accuracy))
echo round(3.591238123, 3) . "<br>";
// mt_rand(-100, 100) -- returns random num from range
$rand = mt_rand(-100, 100);
echo $rand;

// min / max functions
$arr = [12, 3, -9, 100, 1223, 65, -54];
echo "<br>" . "max: " . max($arr) . "; min: " . min($arr) . ";<br>";
echo max(1, 2, 3, 4, 5) . "<br>";
?>
</body>
</html>