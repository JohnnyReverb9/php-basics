<?php

// один класс создаёт другой, как фабрика

class Worker
{
    private string $name;
    private string $project;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getProject(): string
    {
        return $this->project;
    }

    public function setProject(string $project): void
    {
        $this->project = $project;
    }
}

class WorkerFactory
{
    public static function make(): Worker
    {
        return new Worker;
    }
}

$worker = WorkerFactory::make();
$worker->setProject("Enterprise");
var_dump($worker->getProject());