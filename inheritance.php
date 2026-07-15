<?php
interface EmpIfr{
    public function __construct($name, $age, $sallary);
    public function getMyage();
    public function fn2();

}

class Person {
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    protected function sayHello(){
        echo "Hello";
    }
}


class Employee extends Person implements EmpIfr{
    public $sallary;

    public const ADMIN = true;

    public function __construct($name, $age, $sallary) {
        parent::__construct($name, $age);
        $this->sallary = $sallary;
    }

    public function getMyage() {
        parent::sayHello();
        return $this->name;
    }

    public function fn2() {
        $this->getMyage();
    }
}

function myFunc(Person $person){
    echo $person->name;
}

myFunc(new Employee("khj", 10, 20))


?>