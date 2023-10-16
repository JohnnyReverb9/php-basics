<?php

interface Activities
{
    public function work();
}

class Developer implements Activities
{
    public function work(): string
    {
        return "im Developer";
    }
}

class Designer implements Activities
{
    public function work(): string
    {
        return "im designer";
    }
}

interface ActivitiesFactory
{
    public static function make();
}

class DeveloperFactory implements ActivitiesFactory
{
    public static function make(): Developer
    {
        return new Developer();
    }
}

class DesignerFactory implements ActivitiesFactory
{
    public static function make(): Designer
    {
        return new Designer();
    }
}

$dev = DeveloperFactory::make();
$des = DesignerFactory::make();

var_dump($dev->work());
var_dump($des->work());
