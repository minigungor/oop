<?php

namespace lesson05\grasp\example05\demo02;

class Employee
{
    private $name;
    private $email;

    public function __construct($name,$email)
    {
        $this->email = $email;
        $this->name = $name;
    }

    public function rename($name)
    {
        $this->name = $name;
    }

    public function changeEmail($email)
    {
        $this->email = $email;
    }

    public static function filterEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}