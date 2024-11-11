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

    function Get_Student_Details(){
        echo "<h1>Name:  ".$this->Name."</h1>";
        echo "<h1>Email:  ".$this->Email."</h1>";
        echo "<h1>Gender:  ".$this->Gender."</h1>";
        echo "<h1>Faculty:  ".$this->Faculty."</h1>";
    }
    
    //Destructor method is automatically called when the class is destroyed or when the object is no longer in use.
    function __destruct(){
        echo "<h1 style='color:red'>Object is destroyed</h1>";
    }

}

//When initializing the class the constructor method is called with the name of the class 
$John = new Student("John","Male","Ict","John03@gmail.com");

$John->Get_Student_Details();
