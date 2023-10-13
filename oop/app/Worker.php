<?php

namespace Аpp;

// асбтрактный класс обозначает методы и поля, но создать от него объект не получится
abstract class Worker implements State
{
    // fixed vals
    // strings
    // Null
    // numbers
    // arrays

    protected string $name;
    protected int $age;
    // protected array $hours;
    protected int $hours = 8;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getHours(): int
    {
        return $this->hours;
    }

    // dynamic vals
    // functions
}