<?php
namespace app\contracts;
interface EmployeeInterface
{
    const SAYI= 1;

    public function getFirstName(): string;
    public function setFirstName(string $firstname): self;

    public function getLastName(): string;
    public function setLastName(string $lastname): self;

    public function getSayi(): int;
}