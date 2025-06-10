<?php

namespace lesson02\example3\demo12;

class Name
{
    public $first;
    public $last;

    public function __construct($first, $last)
    {
        $this->first = $first;
        $this->last = $last;
    }
}

class Phone
{
    public $code;
    public $number;

    public function __construct($code, $number) { }
}

class Address
{
    public $country;
    public $region;
    public $city;
    public $street;
    public $house;

    public function __construct() { }
}

class Employee
{
    public $id;
    public $name;
    public $phone;
    public $address;

    public function __construct($id, Name $name, Phone $phone, Address $address) { }
}

#####################3

class StaffService {
    public function recruitEmployee(Name $name, Phone $phone, Address $address)
    {
        $employee = new Employee($this->generateId(), $name, $phone, $address);
        $this->save($employee);
        return $employee;
    }

    private function generateId() { return rand(10000, 99999); }

    private function save(Employee $employee) { /**/ }
}

#####################################
$service = new StaffService();

$name = new Name('Vasya', 'Pupkin');
$phone = new Phone('920000000', 7);
$address = new Address('Russia', 'Lipeckaya reg.', 'Pushkin city', 'Lenin str.', '1');

$employee = $service->recruitEmployee($name, $phone, $address);

echo $employee->phone->number . PHP_EOL;

####################################

$employee = $service->recruitEmployee(
    new Name('Vasya', 'Pupkin'),
    new Phone('920000000', 7),
    new Address('Russia', 'Lipeckaya reg.', 'Pushkin city', 'Lenin str.', '1')
);

echo $employee->name->last . ' ' . $employee->name->first . PHP_EOL;

