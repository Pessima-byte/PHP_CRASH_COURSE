<?php

//Creating a trait
trait Details{
private $name;
private $Age;
}

trait Design {
private $color;
private $Shape;
}

class Person {
    //Using a trait
    use Details, Design;

    function __construct($name, $Age, $Shape, $Color){
        $this->name=$name;
        $this->Age=$Age;
        $this->color=$Color;
        $this->Shape=$Shape;
    }

    public function get_Info(){
        echo "<h1>$this->name</h1>";
        echo "<h1>$this->Age</h1>";
        echo "<h1>$this->color</h1>";
        echo "<h1>$this->Shape</h1>";
    }

}

$Tommy=new Person("Tommy",18,"none","fair");

$Tommy -> get_Info();