<?php

// хорошо подходит для большой иерархии
// todo: доделать
interface AbstractFactory
{
    public function makeSchoolWorker();
    public function makeCleaningWorker();
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