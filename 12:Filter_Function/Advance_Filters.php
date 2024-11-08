<?php

$Num=10;

//This Validate the integer and also check the range of the int on filter
if(filter_var($Num,FILTER_VALIDATE_INT,array("options"=>array("min_range"=>1,"max_range"=>15)))!=false){
    echo "<h1>$Num</h1>";
}