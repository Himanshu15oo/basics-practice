<?php

class Task
{
    public $description;
    public $completed = false;

    public function __construct($desc)
    {
        $this->description = $desc;
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task('Learn oops');
$task2 = new Task('Pick up groceries');
$task3 = new Task('Bring apples');
$task4 = new Task('Bring mangoes');

var_dump($task->description);
var_dump($task2->description);
var_dump($task3->description);
var_dump($task4->description);

$task2->complete();
var_dump($task2->completed);
