<?php

$Email="Pessimatommy03@gmail.com";

//Sanitize the Email first
$Email=filter_var($Email,FILTER_SANITIZE_EMAIL);

//Display the Email if it's valid
if(filter_var($Email,FILTER_VALIDATE_EMAIL)!=false){
    echo "<h1>$Email</h1>";
}

