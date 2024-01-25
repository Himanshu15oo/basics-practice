<?php

class Person
{

    private $name;
    private $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        // Age in days
        return $this->age * 365;
    }
}


$john = new Person("John Doe");
$john->setAge(30);

// Age in days
var_dump($john->getAge());
