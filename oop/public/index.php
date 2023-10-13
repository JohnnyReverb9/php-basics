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

// TODO: добавить магические методы
// плюс научиться связывать оракл с php