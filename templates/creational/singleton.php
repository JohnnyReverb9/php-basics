<?php

// одиночный шаблон, в основном используется для соединения с базой данной

final class Connection
{
    private static ?self $instance = null; // self -- тип данных класса, а ? -- означает, что это либо селф, либо нулл
    private static string $name;

    public static function getName(): string
    {
        return self::$name;
    }

    public static function setName(string $name): void
    {
        self::$name = $name;
    }

    public static function getInstance(): self // возвращение класса
    {
        if (self::$instance === null)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function __clone(): void
    {
        // запрет на клонирование
    }

    public function __wakeup(): void
    {
        // запрет на клонирование
    }
}

$connect = Connection::getInstance(); // если нет объекта, то вернёт объект
$connect::setName("OracleDB");
// var_dump($connect::getName());

$connect2 = Connection::getInstance();
var_dump($connect2::getName());