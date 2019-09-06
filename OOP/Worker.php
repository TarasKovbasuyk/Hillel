<?php


class Worker
{
    private $name, $age, $salary;

    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }


    public function getName(): string
    {
        return $this->name;
    }

    public function setAge(int $age)
    {
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
        return $this;
    }

    public function getAge(): string
    {
        return $this->age;
    }

    public function setSalary(int $salary)
    {
        $this->salary = $salary;
        return $this;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

    private function checkAge($age): bool
    {
        return $age >= 1 && $age <= 100;
    }

    public function showInfo()
    {
        echo $this->name . " " . $this->age . '<br>';
    }
}

$ivan = new Worker();
$ivan->setAge('25')->setName('Иван')->setSalary('1000');

$vasiliy = new Worker();
$vasiliy->setAge('26')->setName('Вася')->setSalary('2000');

$workersSalary = $ivan->getSalary() + $vasiliy->getSalary();
echo $workersSalary . '<br>';
$workersAge = $ivan->getAge() + $vasiliy->getAge();
echo $workersAge . '<br>';

$ivan->showInfo();
$vasiliy->showInfo();

