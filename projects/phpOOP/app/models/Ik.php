<?php
namespace app\models;

use app\models\Employee;
class Ik extends Employee
{
    public function calculateSalary(): float
    {
        return ($this->getExperience() * 20) + $this->getSalary();
    }
}