<?php

//This the class of Users (Classes are blueprints for Objects)
class User{
    //These are the class internal properties(Variables)
    public $Name;
    public $Email;
    public $Password;

    //This is a method of a class (Function) 
    function Set_User_Details($Name,$Email,$Password) {
        //$this is a key word specifying the actual object working on 
        $this->Name=$Name;
        $this->Email=$Email;
        $this->Password=$Password;
    }

    //This is a method that displays the details of the user
    function get_User_Details(){
        
        echo "<h1>Name:  ".$this->Name."</h1>";
        echo "<h1>Email:  ".$this->Email."</h1>";
        echo "<h1>Password:  ".$this->Password."</h1>";
    }
}

//This is the initialization of the class creating he User Object
$Tommy=new User();

//This is the usage of the class methods
$Tommy->Set_User_Details("Tommy","Pessimatommy03@gmail.com","Tomsaxmuzik001$");


//Displaying the Object information 
$Tommy->get_User_Details();