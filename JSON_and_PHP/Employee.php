<?php

class Employee
{
    private $name;
    private $surname;
    private $salary;

    /**
     * Employee constructor.
     * @param $name
     * @param $surname
     * @param $salary
     */
    public function __construct($name, $surname, $salary)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->salary = $salary;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "Employee {name: $this->name, surname: $this->surname, salary: $this->salary}";
    }

}

$myEmployee = new Employee("Steve", "Ron", 15487);

echo json_encode($myEmployee);