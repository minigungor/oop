<?php

namespace demo04;

class Student {
    var $firstName;
    var $lastName;
    var $birthDate;

    function getFullName() {
        return $this->lastName . ' ' . $this->firstName;
    }
}

$student1 = new Student();

$student1->firstName = 'Vasya';
$student1->lastName = 'Pupkin';

$student2 = $student1;
$student2->firstName = 'Petya';

echo $student1->getFullName() . PHP_EOL;
echo $student2->getFullName() . PHP_EOL;

function a($a, $b) {
    $b = $a + 7;
}

function b($a, &$b) {
    $b = $a + 7;
}

$a = 5;

a(3, $a);

echo $a; // 5

$a = 5;

b(3, $a);

echo $a; // 10

##################

$array1 = [3, 7, 1];

$array2 = sort($array1);

print_r($array1); // [1,3,7]
print_r($array2); // true

$array1 = [3, 7, 1];

sort($array1);

print_r($array1); // [1,3,7]