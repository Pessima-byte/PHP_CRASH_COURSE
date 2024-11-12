<?php

class Person{
    // Public property, accessible outside the class
    public $Name;

    // Private property, accessible only within this class
    private $Hubby;
    
    // Protected property, accessible within this class and child classes
    protected $Address;

    // Constructor to initialize properties
    function __construct($Name, $Address="", $Hubby=""){
        $this->Name = $Name;
        $this->Address = $Address;
        $this->Hubby = $Hubby;
    }

    // Method to display person details
    function getPersonDetails(){
        echo "<h1>Name: ".$this->Name."</h1>";
        echo "<h1>Address: ".$this->Address."</h1>";
        echo "<h1>Hubby: ".$this->Hubby."</h1>";
    }
}

// Inheriting from the Person class
class Pet extends Person{
    protected $PetName;
    private $Breed;
    private $Owner;

    // Constructor to initialize pet-specific properties and owner details
    function __construct($PetName, $Breed, $OwnerName, $OwnerAddress, $OwnerHubby = ""){
        parent::__construct($OwnerName, $OwnerAddress, $OwnerHubby);  // Initialize parent (Person) properties
        $this->PetName = $PetName;
        $this->Breed = $Breed;
        $this->Owner = $OwnerName;  // Owner name from Person
    }

    // Method to display pet details
    function getPetDetails(){
        echo "<h1>Pet Name: ".$this->PetName."</h1>";
        echo "<h1>Breed: ".$this->Breed."</h1>";
        echo "<h1>Owner: ".$this->Owner."</h1>";
        echo "<h1>Address: ".$this->Address."</h1>";  // Inherited Address
    }
}


// Creating a Pet instance (inherited from Person)
$pet = new Pet("Buddy", "Golden Retriever", "Tommy", "123 Maple St", "Gardening");
$pet->getPetDetails();