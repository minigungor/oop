<?php

namespace lesson02\example3\demo11;

class Name
{
    public $first;
    public $last;
}

class Phone
{
    public $code;
    public $number;
}

class Address
{
    public $country;
    public $region;
    public $city;
    public $street;
    public $house;
}

class Employee
{
    public $id;
    public $name;
    public $phone;
    public $address;
}

#####################3

class StaffService {
    public function recruitEmployee(Name $name, Phone $phone, Address $address)
    {
        $employee = new Employee();
        $employee->id = $this->generateId();
        $employee->name = $name;
        $employee->phone = $phone;
        $employee->address = $address;

        return $employee;
    }

    private function generateId() {
        return rand(10000, 99999);
    }

    private function save(Employee $employee)
    {
        // ...
    }
}

#####################################

$name = new Name();
$name->first = 'Vasya';
$name->last = 'Pupkin';

$phone = new Phone();
$phone->number = '920000000';
$phone->code = 7;

$address = new Address();
$address->country = 'Russia';
$address->region = 'Lipeckaya reg.';
$address->city = 'Pushkin city';
$address->street = 'Lenin str.';
$address->house = '1';

$service = new StaffService();
$employee = $service->recruitEmployee($name, $phone, $address);

echo $employee->phone->number . PHP_EOL;

// DATA Transfer Object DTO

