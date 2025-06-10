<?php

namespace lesson02\example3\demo18;

use Exception;
use MongoDB\Driver\Exception\InvalidArgumentException;

class Name
{
    public $first;
    public $last;

    public function __construct($first, $last)
    {
        $this->first = $first;
        $this->last = $last;
    }

    public function getFull()
    {
        return $this->last . ' ' . $this->first;
    }
}

class Phone
{
    public $code;
    public $number;

    public function __construct($code, $number) {
        $this->code = $code;
        $this->number = $number;
    }

    public function isEqualTo(Phone $phone)
    {
        return $this->code == $phone->code && $this->number == $phone->number;
    }
}

class Address
{
    public $country;
    public $region;
    public $city;
    public $street;
    public $house;

    public function __construct($country, $region, $city, $street, $house) {
        $this->country = $country;
        $this->region = $region;
        $this->city = $city;
        $this->street = $street;
        $this->house = $house;
    }
}

class Employee
{
    private $id;
    private $name;
    private $phones = [];
    private $address;

    public function __construct($id, Name $name, array $phones, Address $address) {
        foreach ($phones as $phone) {
            if(!$phone instanceof Phone) {
                throw new InvalidArgumentException('Incorrect phone');
            }
        }
        $this->id = $id;
        $this->name = $name;
        $this->phones = $phones;
        $this->address = $address;
    }
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPhones()
    {
        return $this->phones;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function rename(Name $name)
    {
        $this->name = $name;
    }

    public function addPhone(Phone $phone)
    {
        foreach($this->phones as $item) {
            if($item->isEqualTo($phone)) {
                throw new \Exception('Phone already exist');
            }
        }
    }

    public function changeAddress(Address $address)
    {
        $this->address = $address;
    }

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

echo $employee->getPhone()->number . PHP_EOL;

####################################

$employee = $service->recruitEmployee(
    new Name('Vasya', 'Pupkin'),
    new Phone('920000000', 7),
    new Address('Russia', 'Lipeckaya reg.', 'Pushkin city', 'Lenin str.', '1')
);

echo $employee->getName()->getFull() . PHP_EOL;

$employee->rename(new Name('Petya', 'Ivanov'));

echo $employee->getName()->getFull() . PHP_EOL;

