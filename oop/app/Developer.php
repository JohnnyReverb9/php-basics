<?php

namespace Аpp;

class Developer extends Worker
{
    use Activities; // подключаем трейт всегда в самом верху
    protected string $project;
    protected int $rest;
    protected int $hours = 10;

    public function __construct($name, $age, $project, $rest)
    {
        $this->name = $name;
        $this->age = $age;
        $this->project = $project;
        $this->rest = $rest;
    }

    public function updateProject(string $project): void
    {
        $this->project = $project . "_UPDATED";
    }

    public function getProject(): string
    {
        return $this->project;
    }

    public function setProject(string $project): void
    {
        $this->project = $project;
    }

    public function getRest(): int
    {
        return $this->rest;
    }

    public function setRest(int $rest): void
    {
        $this->rest = $rest;
    }

    public function info()
    {
        echo "name: $this->name<br>";
        echo "age: $this->age";
    }
}