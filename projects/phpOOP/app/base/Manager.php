<?php
namespace app\base;

use app\models\Employee;
class Manager extends Employee
{
    public function calculateSalary(): float
    {
        return ($this->getExperience() * 100) + $this->getSalary();
    }
}