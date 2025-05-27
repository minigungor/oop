<?php

function getFullName($lastName, $firstName) {
    return $lastName . " " . $firstName;
}

$student = [
    'firstName' => 'Vasua',
    'lastName' => 'Pupkin',
    'birthDate' => '1990-01-12',
];

$student['firstName'] = 'Petya';

echo getFullName($student['lastName'], $student['firstName']) . PHP_EOL;