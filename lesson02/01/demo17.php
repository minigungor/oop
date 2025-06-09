<?php

namespace lesson02\example1\demo17;

class Student
{
    private $firstName;
    private $lastName;
    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    public function getFullName()
    {
        return $this->lastName . ' ' . $this->firstName;
    }
    public function __toString()
    {
        return $this->getFullName();
    }
}

$student = new Student('Petya', 'Ivanov', '1995-08-26');

echo $student->getFullName();

$student->rename('Vasya', 'Pupkin');

echo (string)$student . PHP_EOL;