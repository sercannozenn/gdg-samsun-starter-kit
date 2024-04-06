<?php
class Employee implements EmployeeInterface
{
    private string $firstname;
    private string $lastname;

    public function __construct(private int $age)
    {
        echo "ilk ben çalışırım <br>";
    }
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
    public function getFullName2(): string
    {
        return $this->getFirstName() . " " . $this->getLastname();
    }
    public function getAge(): int
    {
        return $this->age;
    }
    public function getSayi(): int
    {
        return self::SAYI;
//        return EmployeeInterface::SAYI;
    }
    public function __destruct()
    {
        echo "son ben çalışırım";
    }

}