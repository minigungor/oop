<?php

namespace lesson02\example3\demo10;

class StaffService {
    public function recruitEmployee($name, $phone, $adress)
    {
        $employee = [
            'id' => mt_rand(10000, 99999),
            'name' => $name,
            'phone' => $phone,
            'address' => $adress
        ];
        $this->save($employee);
        return $this->employee;
    }

    public function save($employee)
    {
        $file = __DIR__ . '/data/employee_' . $employee['id'] . 'php';
        file_put_contents($file, '<?php return ' . var_export($employee, true) . ';');
    }
}

#############3

$service = new StaffService();

$name = [
    'first' => 'Vasya',
    'last' => 'Pupkin'
];

$phone = [
    'code' => 7,
    'number' => '9200000000'
];

$address = [
    'country' => 'Russia',
    'region' => 'Lipeckaya reg.',
    'city' => 'Pushkin city',
    'street' => 'Lenin str.',
    'house' => '1'
];

$service->recruitEmployee($name, $phone, $adress);