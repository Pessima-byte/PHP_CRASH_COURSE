<?php

class Device {
    //Creating a constant
const VendorMac="f1:af:3b";
protected $VendorAssign;
}

class Computer extends Device {
    private $MacAddress;
    private $Name;
    function __construct($Name,$VendorAssign) {
        $this->Name=$Name;
        //Using a constant variable inside the class or chile class
        $this->MacAddress = self::VendorMac . $VendorAssign;
    }

    public function getmacaddress() {
     
        echo "<h1>".$this->Name.": ".$this->MacAddress."</h1>";
        
    }

}

$Computer = new Computer("Dell inspiron 9",":ab:23:a1");

$Computer->getmacaddress();

//NOTE: if you want to use Constant outside the class we use the "::" operator