<?php
class Car {
    public $name;

    function setName($n) {
        $this->name = $n;
    }

    function getName() {
        return $this->name;
    }
}

$obj = new Car();
$obj->setName("BMW");

echo $obj->getName();
?>