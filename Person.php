<?php


class Person
{
    protected $name;
    protected $age;

    public function __construct($name)
    {
        $this->name = $name;
    }


    /**
     * @param $age
     * @throws Exception
     */
    public function setAge($age): void
    {
        if ($age < 18){
            throw new Exception("Person is not old enough.");
        }

        $this->age = $age;
    }

    /**
     * @return float|int
     */
    public function getAge()
    {
        return $this->age * 365;
    }

}

$john = new Person('John Doe');
$john->setAge(49);

var_dump($john->getAge());