<?php

namespace Аpp;

class Boss extends Worker
{
    use Activities;
    public string $project;
    protected int $rest;

    public function __construct($name, $age, $project, $rest)
    {
        $this->name = $name;
        $this->age = $age;
        $this->project = $project;
        $this->rest = $rest;
    }

    public function info(): void
    {
        echo "name: $this->name<br>";
        echo "age: $this->age";
    }

    public function getRest(): string
    {
        return $this->rest;
    }

    public function getProject(): string
    {
        return $this->project;
    }
}