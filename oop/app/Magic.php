<?php

namespace Аpp;

// магические методы
class Magic
{
    private string $name;
    private array $spells;
    private int $teleport;

    public function __construct(string $name, array $spells, int $teleport)
    {
        $this->name = $name;
        $this->spells = $spells;
        $this->teleport = $teleport;
    }

    public function __toString(): string
    {
        return $this->name;
    }

//    public function __destruct()
//    {
//        // TODO: Implement __destruct() method.
//    }
}
