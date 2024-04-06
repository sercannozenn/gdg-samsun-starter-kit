<?php
namespace app\models;

use app\contracts\IEmployee;
abstract class Employee implements IEmployee
{
    protected string $firstname;
    protected string $lastname;
    protected int $age;

    protected int $experience = 1;

    protected float $salary;

    public function __construct(int $age)
    {
        $this->age = $age;
        echo "Ben ilk çalışırım <br>";
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): Employee
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): Employee
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function __destruct()
    {
//        echo "Son ben çalışırım";
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): Employee
    {
        $this->age = $age;

        return $this;
    }

    abstract function calculateSalary(): float;

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function setSalary(float $salary): Employee
    {
        $this->salary = $salary;

        return $this;
    }

    public function getExperience(): int
    {
        return $this->experience;
    }

    public function setExperience(int $experience): Employee
    {
        $this->experience = $experience;

        return $this;
    }


    /**
     * public       => Her yerden ulaşılabilir.
     * protected    => Bulunduğu sınıf içerisinden ya da türetildiği(extends)
     *                  edildiği sınıf içerisinden ulaşılır.
     * private      => Yalnızca tanımlandığı sınıf içerisinden ulaşılabilir.
     */
}