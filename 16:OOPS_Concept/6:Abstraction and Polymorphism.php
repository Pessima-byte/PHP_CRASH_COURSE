<?php


//This is an abstract method  
abstract class Animals{
    abstract function Make_Sound();
}


//This is the concept of Polymorphism using the abstract class (Abstractions)
class Dog extends Animals{
    function Make_Sound(){
        echo "<h1>Dog: Woof!</h1>";
    }
}

class Cat extends Animals{
    function Make_Sound(){
        echo "<h1>Cat: Meow!</h1>";
    }
}

$dog = new Dog();
$Cat = new Cat();

$dog->Make_Sound();
$Cat->Make_Sound();