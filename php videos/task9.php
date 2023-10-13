<?php
// functions
// function creating with word key-word "function"
function info()//: void // return type is optional
{
    echo "<h2>info printed</h2>";
}

info();

function greetings($name): string
{
    return "Hello, $name.";
}

echo greetings("Bob");

function math($x, $y): int
{
    return $x + $y;
}

$s = math(10, 20);
echo "\n" . $s;

// also we can call another function in function body
function printer($arg)
{
    echo "<br>printed: $arg<br>";
}
function mult($a, $b)
{
    $total = $a * $b;
    printer($total);
}

mult(10, 78);

//=====================================================================================

function summary(array $arr): float // arg type is optional
{
    $sum = 0;
    foreach ($arr as $value)
    {
        $sum += $value;
    }
    return $sum;
}

$list[] = mt_rand(-20, 20);
echo summary($list);

// [function scope]
// vars inside the func are available only in this func
// it deletes from memory after function ran out
$variable = 100;
function globe()
{
    global $variable; // working with global var
    echo "<br>" . $variable + 10;
}
globe();
echo "<br>";
// static var
function click()
{
    $count = 0;
    $count++;
    echo $count . "<br>";
}

click(); // 1
click(); // 1
click(); // 1
echo "<br>";
// if we need the var to save its value after function ran out
// just type static before var init
function clickStatic()
{
    static $count;
    $count++;
    echo $count . "<br>";
}

clickStatic(); // 1
clickStatic(); // 2
clickStatic(); // 3