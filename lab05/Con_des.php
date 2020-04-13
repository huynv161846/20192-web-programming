<?php

class BaseClass {

    protected $name = "BaseClass";

    function __construct() {
        print("In " . $this->name . " constructor<br>");
    }

    public function __destruct() {
        print("Destroying " . $this->name . "<br>");
    }

}

class SubClass extends BaseClass {

    public function __construct() {
        $this->name = "Subconstruct";
        parent::__construct();
    }

    public function __destruct() {
        parent::__destruct();
    }

}

$obj1 = new SubClass();
$obj2 = new BaseClass();


