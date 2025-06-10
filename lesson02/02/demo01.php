<?php

namespace lesson02\example2\demo01;

$rows = file(__DIR__ . '/list.txt');

$students = [];

foreach ($rows as $row) {
    $values = array_map('trim', explode(';', $row));
    $students[] = [
        'lastName' => $values[0],
        'firstName' => $values[1],
        'birthDate' => $values[2]
    ];
}

foreach($students as $student) {
    echo $student['firstName'] . ' ' . $student['lastName'] . ' ' . $student['birthDate'] . PHP_EOL;
}