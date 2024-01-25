<?php

class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Staff extends Person
{
    protected $members = [];

    public function __construct($members = [])
    {
        $this->members = $members;
    }

    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    public function members()
    {
        return $this->members;
    }
}

class Business
{
    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }

    public function staff()
    {
        return $this->staff->members();
    }
}


$john = new Person('John Doe');
$lilly = new Person('Lilly Doe');

$staff = new Staff([$john]);

$cafe = new Business($staff);

$cafe->hire($lilly);

var_dump($cafe->staff());
