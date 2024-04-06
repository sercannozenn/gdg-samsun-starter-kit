<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once "../app/contracts/EmployeeInterface.php";
require_once "../app/base/Employee.php";
require_once "../app/traits/Logger.php";
require_once "../app/services/Manager.php";
require_once "../app/services/Account.php";
require_once "../app/base/Account.php";

use app\base\Account as BaseAccount;
use app\services\Account as ServicesAccount;
//$employee = new Manager(45);
//
//$employee->setFirstName("Sercan")->setLastname("Özen");
//
//echo $employee->getFullName() . "<br>";
//echo $employee->loguCagir() . "<br>";


$accountPerson = new BaseAccount(15);
$accountPerson->setFirstName("Ahmet")->setLastname("Ekin");

$accountService = new ServicesAccount(20);
$accountService->setFirstName("İlker")->setLastname("Kumanlı");

echo $accountPerson->getFullName2();