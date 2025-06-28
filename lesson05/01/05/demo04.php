<?php

namespace lesson05\grasp\example05\demo04;

class Employee
{
    private $name;
    private $email;

    public function __construct($name,$email)
    {
        $this->email = self::filterEmail($email);
        $this->name = $name;
    }

    public function rename($name)
    {
        $this->name = $name;
    }

    public function changeEmail($email)
    {
        $this->email = self::filterEmail($email);
    }

    private static function filterEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}