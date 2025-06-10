<?php

namespace lesson02\example2\demo05;

// added class
class Student
{
    public $firstName;
    public $lastName;
    public $birthDate;

    public function getFullName() {
        return $this->lastName . " " . $this->firstName;
    }
}

function loadStudentsFromTxt($file)
{
    $rows = file($file);
    $students = [];
    foreach ($rows as $row) {
        $values = array_map('trim', explode(';', $row));
        $students[] = [
            'lastName' => $values[0],
            'firstName' => $values[1],
            'birthDate' => $values[2]
        ];
    }
    return $students;
}

function getFullName($student)
{
    return $student['lastName'] . ' ' . $student['firstName'];
}

// ==================================

$file = __DIR__ . '/list.txt';

// ==================================

$students = loadStudentsFromTxt($file);

foreach($students as $student) {
    echo getFullName($student) . ' ' . $student['birthDate'] . PHP_EOL;
}

// ==================================