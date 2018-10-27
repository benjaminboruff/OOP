<?php

class Task
{
    protected $description;
    protected $title;
    protected $completed = false;

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

}

$task = new Task('Hello World', 'This is some cool shit!');

var_dump($task->getTitle());