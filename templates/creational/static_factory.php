<?php

interface Market
{
    public function work();
}

class Mall implements Market
{
    public function work(): string
    {
        return "from 9 to 5";
    }
}

class Coffee implements Market
{
    public function work(): string
    {
        return "from 11 to 11";
    }
}

// можно не лезть кучу раз в классы и создавать их только отсюда
class MarketFactory
{
    public static function make($marketTitle): ?Market
    {
        $className = ucfirst($marketTitle);
        if(class_exists($className))
        {
            return new $className;
        }

        return null;
    }
}

$mall = MarketFactory::make("mall");
var_dump($mall->work());