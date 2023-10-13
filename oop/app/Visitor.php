<?php

namespace Аpp;

class Visitor
{
    protected string $name;
    protected int $age;
    private bool $visiting = false;

//    public function __construct(string $name, int $age, bool $visiting)
//    {
//        $this->name = $name;
//        $this->age = $age;
//        $this->visiting = $visiting;
//    }

    public function isVisit(): string
    {
        return $this->visiting ? "true" : "false";
    }

    public function setVisit($bool): void
    {
        $this->visiting = $bool;
    }


}