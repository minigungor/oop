<?php

namespace lesson02\example1\demo06;

class Student {
    public $firstName;
    public $lastName;

    public function getFullName() {
        return $this->lastName . ' ' . $this->firstName;
    }

    public function rename($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}

$student = new Student();

echo $student->getFullName() . PHP_EOL;

$student->firstName = 'Vasya';
$student->lastName = 'Pupkin';

echo $student->getFullName() . PHP_EOL;

$student->rename('Petya', 'Ivanov');

echo $student->getFullName() . PHP_EOL;