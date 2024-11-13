<?php

class Display{
    static function Name($Name){
        echo "<h1>Name: ".$Name."</h1>";
    }

    static function get_Info($Name){
        self::Name($Name);
    }
}

Display::Name("John Doe");
Display::get_Info("Tomsax");

class Display2{
    //Creating a static property
   public static $Name="Tomsax";

    static function get_Info($Name){
        //Using a static property in a Class
        echo "<h1>Name: ".self::$Name."</h1>";
    }
}

//Using a static property outside the class
Display2::$Name;


//Using a static method outside the class
Display2::get_Info("Tomsax");

