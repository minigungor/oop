<?php

namespace app\events\employee;

use app\events\Event;
use app\events\LoggedEvent;
use app\models\Assignment;
use app\models\Employee;
use app\models\Position;

class EmployeeAssignEvent extends Event implements LoggedEvent
{
    public $position;
    public $employee;
    public $assignment;

    public function __construct(Employee $employee, Assignment $assignment, Position $position)
    {
        $this->employee = $employee;
        $this->assignment = $assignment;
        $this->position = $position;
    }

    public function getLogMessage()
    {
        return 'Employee ' . $this->employee->id . ' is assigned to ' . $this->position->name;
    }
}