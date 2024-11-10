<?php

class Student{
    public $Name;
    public $Email;
    public $Gender;
    public $Faculty;

    //This is a constructor method that initializes the class properties when a new object is created.
    function __construct($Name,$Gender,$Faculty,$Email){
        $this->Name=$Name;
        $this->Email=$Email;
        $this->Gender=$Gender;
        $this->Faculty=$Faculty;
    }

    function get_Student_Details(){
        echo "<h1>Name:  ".$this->Name."</h1>";
        echo "<h1>Email:  ".$this->Email."</h1>";
        echo "<h1>Gender:  ".$this->Gender."</h1>";
        echo "<h1>Faculty:  ".$this->Faculty."</h1>";
    }

}

//When initializing the class the constructor method is called with the name of the class 
$John = new Student("John","Male","Ict","John03@gmail.com");

$John->get_Student_Details();