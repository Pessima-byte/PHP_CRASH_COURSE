<?php

//Creating an interface 
interface MakeSound{
    //All Method in interface cannot be implemented
    public function Sound();
}

interface Attitude{
    public function Attitude();
}



//Implementing multiple interface is possible 
class dog implements Attitude, MakeSound{
    public function Sound(){
        echo "<h1>Sound: Woef</h1>";
    }
    public function Attitude(){
        echo "<h1>Attitude: Friendly</h1>";
    }
}
class Cat implements Attitude, MakeSound{
    public function Sound(){
        echo "<h1>Sound:Meow</h1>";
    }
    public function Attitude(){
        echo "<h1>Attitude: Friendly but sometimes wild</h1>";
    }
}

$Dog= new Dog();
$Cat= new Cat();

$Dog->Sound();
$Dog->Attitude();

$Cat->Sound();
$Cat->Attitude();
