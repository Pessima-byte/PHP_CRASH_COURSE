<?php
$Servername="localhost";
$Username="root";
$Password="";

try{
    //This is the variable that establish the connection to mysql db
    $Conn= new PDO("mysql:host=$Servername;",$Username,$Password);

    //This line set ErrMode to exception
    $Conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h1>Connection Establish </h1>";
}catch(PDOException $e){
    echo $e->getMessage();
}

