<?php
class Student {
    public $name;

    function __construct($n) {
        $this->name = $n;
    }

    function display() {
        echo "Name: " . $this->name;
    }
}

$s = new Student("Navya");
$s->display();
?>