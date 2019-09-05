<?php


class Worker
{
    private $name;
    private $age;
    private $salary;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->checkAge($age);
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    private function checkAge($age)
    {
        if ($age >= 1 && $age <= 100) {
            $this->age = $age;
        } else {
            return false;
        }
    }
}

$Ivan = new Worker();
$Ivan->setAge('25');
$Ivan->setName('Иван');
$Ivan->setSalary('1000');
$Vasiliy = new Worker();
$Vasiliy->setAge('26');
$Vasiliy->setName('Вася');
$Vasiliy->setSalary('2000');
echo $Ivan->getSalary() + $Vasiliy->getSalary() . '<br>';
echo $Ivan->getAge() + $Vasiliy->getAge() . '<br>';
function showWorker(object $object)
{
    echo $object->getName() . " " . $object->getAge() . " " . "лет" . '<br>';
}

showWorker($Ivan);
showWorker($Vasiliy);
