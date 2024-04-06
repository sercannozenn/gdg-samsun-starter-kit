<?php
namespace app\contracts;
interface IEmployee
{
    const SAYI = 125;

    function getSalary(): float;

    function setSalary(float $salary): self;
}