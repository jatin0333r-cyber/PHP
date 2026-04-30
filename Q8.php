<?php
class Student {
    public $name;

    function setName($name) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }
}

$obj = new Student();
$obj->setName("Navya");

echo $obj->getName();
?>