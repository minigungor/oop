<?php

namespace lesson02\example1\demo10;

class Student {
    private $firstName;
    private $lastName;

    public function __construct() {
        echo 'Constructor' . PHP_EOL;
    }

    public function rename($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFullName() {
        return $this->lastName . ' ' . $this->firstName;
    }

}

$student = new Student();

$student->rename('Petya', 'Ivanov');

echo $student->getFullName() . PHP_EOL;