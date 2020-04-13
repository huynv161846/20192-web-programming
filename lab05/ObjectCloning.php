<?php

class ObjectTracker {

    private static $nextSerial = 0;
    private $id, $name;

    public function __construct($name) {
        $this->name = $name;
        $this->id = ++self::$nextSerial;
    }

    public function __clone() {
        $this->name = "Clone of $this->name";
        $this->id = ++self::$nextSerial;
    }

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

}

$ot = new ObjectTracker("Zee's Obj");
$ot2 = $ot;
$ot2->setName("Another Obj");

print($ot->getId() . " " . $ot->getName() . "<br>");
print($ot2->getId() . " " . $ot2->getName() . "<br>");
