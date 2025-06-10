<?php

namespace lesson02\example3\demo09;

##################################

class StaffService
{
    public function recruitEmployee($firstName, $lastName, $phoneCode, $phoneNumber, $addressCountry, $addressRegion, $addressCity, $addressStreet, $addressHouse)
    {
        //...
    }
}

$service = new StaffService();

$service->recruitEmployee('Vasya', 'Pupkin', 7,  '9200000000', 'Russia', 'Lipeckaya reg.', 'Pushkin city', 'Lenin str.', '1');