<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require "../app/contracts/IEmployee.php";
require "../app/traits/Logger.php";
require "../app/models/Employee.php";
require "../app/base/Manager.php";
require "../app/models/Manager.php";
require "../app/models/Account.php";
require "../app/models/Ik.php";

use app\models\Manager as ModelManager;
use app\base\Manager as BaseManager;
use app\models\Account;
use app\models\Ik;

$manager = new ModelManager(20);
$manager2 = new BaseManager(20);
$account = new Account(25);
$ik = new Ik(30);

$manager->setFirstname("Sercan")->setSalary(1000)->setExperience(15);
$account->setFirstname("Mustafa")->setSalary(2000)->setExperience(10);
$ik->setFirstname("Seda")->setSalary(3000)->setExperience(5);


echo "Manager " . $manager->getFirstname() . " " . $manager->calculateSalary() . " maaş almaktadır. <hr>";
echo "Account " . $account->getFirstname() . " " . $account->calculateSalary() . " maaş almaktadır. <hr>";
echo "IK " . $ik->getFirstname() . " " . $ik->calculateSalary() . " maaş almaktadır. <hr>";