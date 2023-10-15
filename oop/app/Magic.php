<?php

namespace Аpp;

// магические методы
class Magic
{
    private string $name;
    private array $spells;
    private int $teleport;

    public function getSpells(): array
    {
        return $this->spells;
    }

    public function __construct(string $name, array $spells, int $teleport)
    {
        $this->name = $name;
        $this->spells = $spells;
        $this->teleport = $teleport;
    }

    public function __toString(): string
    {
        // return $this->name;
        // print_r($this);
        return "Magic -- это объект, а не строка, дурень";
    }

    // можно так обезопаситься от вызова функций, которых нет в классе
    public function __call(string $name, array $arguments)
    {
        if ($name === "sum")
        {
            // echo $arguments[0];
            return array_sum($arguments);
        }
        else
        {
            return "Такая функция не реализовывалась, зачем ты её вызвал";
        }
    }
    // аналогично со статикой
    public static function __callStatic(string $name, array $arguments)
    {
        if ($name === "mult" && count($arguments) == 2)
        {
            return $arguments[0] * $arguments[1];
        }
        else
        {
            return "Такой статической функции нет";
        }
    }

    // получается, можно не создавать множество методов, а реализовать проверку на имя внутри
    // одной магической функции; даже если оставить метод пустым, то при вызове функции ошибка не случится

    // аналогично работают магические геттеры и сеттеры
    public function __get(string $name)
    {
        if (isset($this->spells[$name]))
        {
            return "$name : $this->spells['$name']";
        }
        return null;
    }

    public function __set(string $name, $value): void
    {
         $this->spells[$name] = $value;
    }

    // редко используется; вызывается тогда, когда цикл реализации класса завершается
    public function __destruct()
    {
        print_r("<br>Object has been destructed<br>");
    }
}
