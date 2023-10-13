<?php

namespace Аpp;

class Salary
{
    public static $totalHours;

    public static function countSalary(): float|int
    {
        return self::$totalHours * 8;
    }
}