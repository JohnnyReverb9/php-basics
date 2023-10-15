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

    // isset, unset обрабатывают проверку на свойства объекта и удаление
    public function __isset($name): bool
    {
        if ($name === $this->name || $name === $this->teleport)
        {
            return true;
        }
        return false;
    }

    public function __unset(string $name): void
    {
        print_r("ансет того, чего нет");
    }

    // прописываем сценарий сериализации
    public function __serialize(): array
    {
        return [
            "name" => "Just Dumb",
            "spells" => ["fire", "paper"],
            "teleport" => 10
        ];
    }

    // сценарий дереализации
    public function __unserialize(array $data): void
    {
        var_dump($data);
    }

//    public function __sleep(): array
//    {
//        print_r("i sleep");
//        return [];
//    }

    public function __wakeup(): void
    {
        print_r("i woke up");
    }

    // к объекту можно обратиться просто как к функции
    public function __invoke($arg): float
    {
        return log(cos($arg));
    }

    // по сути просто копирует объект
    public function __clone(): void
    {
        print_r("object copied");
    }

    // можно задать параметры, которые бы выводились при вардампе (чтобы не выводить всё)
//    public function __debugInfo(): ?array
//    {
//        return [
//          "name" => $this->name
//        ];
//    }

    // редко используется; вызывается тогда, когда цикл реализации класса завершается
    public function __destruct()
    {
        print_r("<br>Object has been destructed<br>");
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
