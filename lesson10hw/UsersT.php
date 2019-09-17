<?php


class UsersT
{
    private $name, $dateOfBirth, $position, $salary;
    private static $count = 0;

    public function __construct($name, $dateOfBirth, $position, $salary)
    {
        self::$count++;
        $this->name = $name;
        $this->dateOfBirth = $dateOfBirth;
        $this->position = $position;
        $this->salary = $salary;
    }

    public static function getCount()
    {
        return self::$count;
    }

    public function __clone()
    {
        self::$count++;
        $this->salary = null;
        $this->position = null;

    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position): void
    {
        $this->position = $position;
    }

    public static function __callStatic($name, $arguments)
    {
        if ($name == 'setCount') {
            return self::$count = $arguments[0];
        }
    }

    public function __sleep()
    {
        return ['name', 'dateOfBirth'];
    }

    public function __wakeup()
    {
        $this->position = 'empty';
    }

}