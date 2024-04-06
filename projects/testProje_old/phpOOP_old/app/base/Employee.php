<?php
namespace app\base;

use app\contracts\EmployeeInterface;
abstract class Employee implements EmployeeInterface
{
    protected string $firstname;
    protected string $lastname;

    public function __construct(private int $age)
    {
        echo "ilk ben çalışırım <br>";
    }

    public function getFullName(): string
    {
        return  $this->firstname . " " . $this->lastname;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    abstract public function getFullName2(): string;

    public function getFirstName(): string
    {
        return $this->firstname;
    }
    public function setFirstName(string $firstname): Employee
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
    public function getSayi(): int
    {
        return self::SAYI;
        //        return EmployeeInterface::SAYI;
    }

    final function yaz()
    {

    }

}