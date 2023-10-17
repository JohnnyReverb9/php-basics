<?php

// хорошо подходит для большой иерархии

interface AbstractFactory
{
    public static function makeSchoolWorker();
    public static function makeCleaningWorker();
}

class OutsourceSchoolFactory implements AbstractFactory
{
    public static function makeCleaningWorker(): OutsourceCleaningWorker
    {
        return new OutsourceCleaningWorker();
    }

    public static function makeSchoolWorker(): OutsourceSchoolWorker
    {
        return new OutsourceSchoolWorker();
    }
}

class NativeSchoolFactory implements AbstractFactory
{
    public static function makeSchoolWorker(): NativeSchoolWorker
    {
        return new NativeSchoolWorker();
    }

    public static function makeCleaningWorker(): NativeCleaningWorker
    {
        return new NativeCleaningWorker();
    }
}

interface Staff
{
    public function work();
}

interface SchoolWorker extends Staff
{
    public function teach();
}

interface CleaningWorker extends Staff
{
    public function clean();
}

class NativeSchoolWorker implements SchoolWorker
{
    public function work()
    {
        return "school working";
    }
    public function teach()
    {
        return "native school teaching";
    }
}

class NativeCleaningWorker implements CleaningWorker
{
    public function work()
    {
        return "cleaning";
    }
    public function clean()
    {
        return "native cleaning";
    }
}

class OutsourceSchoolWorker implements SchoolWorker
{
    public function work()
    {
        return "school working";
    }
    public function teach()
    {
        return "outsource school teaching";
    }
}

class OutsourceCleaningWorker implements CleaningWorker
{
    public function work()
    {
        return "cleaning";
    }
    public function clean()
    {
        return "outsource cleaning";
    }
}


$nativeCleaning = NativeSchoolFactory::makeCleaningWorker();
$nativeSchool = NativeSchoolFactory::makeSchoolWorker();

$outsourceCleaning = OutsourceSchoolFactory::makeCleaningWorker();
$outsourceSchool = OutsourceSchoolFactory::makeSchoolWorker();

print_r($nativeCleaning->work() . "<br>");
print_r($nativeCleaning->clean() . "<br>");
print_r($outsourceSchool->work() . "<br>");
print_r($outsourceSchool->teach() . "<br>");
