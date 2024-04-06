<?php
namespace app\services;

use app\base\Employee as BaseEmployee;
class Account extends BaseEmployee
{

    public function __construct(int $age)
    {
        parent::__construct($age);
    }
    public function getFullName2(): string
    {
        return $this->getFirstName() . " " . $this->getLastname();
    }

}