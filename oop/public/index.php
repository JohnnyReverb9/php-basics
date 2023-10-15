<pre>

<?php

require_once "../vendor/autoload.php";

function space(): void
{
    echo "<br>";
}

$visitor = new \Аpp\Visitor();
$boss = new \Аpp\Boss("Alex", 20, "Metro", 30);

$visitor->setVisit(true);
print_r($visitor->isVisit());

space();

$dev = new \Аpp\Developer("John", 22, "Metro", 0);

print_r("rest days: " . $dev->getRest());

$dev->setRest(14);

space();
print_r("project: " . $dev->getProject());

$dev->updateProject($dev->getProject());

space();
print_r("rest days: " . $dev->getRest());
space();
print_r("name: " . $dev->getName());
space();
print_r("age: " . $dev->getAge());
space();
print_r("project: " . $dev->getProject());
space();

space();
echo "Boss:<br>";
$boss->info();
space();
space();
echo "Developer:<br>";
$dev->info();
space();
space();

$dev->recentProject();
$boss->rest();

space();
space();

// $casts = ["fire", "water", "wind", "earth"];
$casts = [];
$magic = new \Аpp\Magic("Boris", $casts, 1000);
print_r((string)$magic); // использование __toString, когда объект приводится к строке
space();

space();
// пусть таких функций и не реализовывалось, но вызов их возможен
$sum = $magic->sum(12, 12, 12);
print_r($sum);
space();
print_r($magic->summmmm(123, 12));
space();

$mult = \Аpp\Magic::mult(10, 99);
print_r($mult);
space();
print_r(\Аpp\Magic::jumbo());
space();
space();
// реализация магических геттеров и сеттеров
// прокидываем значения
$magic->fire = "fire resist";
$magic->water = "water resist";
$magic->wind = "wind resist";
$magic->earth = "earth resist";
print_r($magic->getSpells());
space();
// получим неизвестное значение
$val = $magic->qwerty;
print_r($val); // не получим ошибки, так как вернулось просто null

?>
    </pre>
