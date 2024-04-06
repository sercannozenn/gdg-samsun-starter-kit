<?php
namespace app\base;

use app\base\Employee;
class Account extends Employee
{
    public function getFullName2(): string
    {
        return $this->getFirstName() . " " . $this->getLastname();
    }

}