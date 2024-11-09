<?php

try{
    include_once "./1:Establishing_Con_PDO.php";

    // First, select the database
    $Conn->exec("USE TOM");

    // Then, create the table
    $Query = "
        CREATE TABLE IF NOT EXISTS Student (
            ID INTEGER PRIMARY KEY AUTO_INCREMENT,
            Name VARCHAR(255) NOT NULL,
            Age INT NOT NULL,
            Grade VARCHAR(10) NOT NULL
        )
    ";

    $Conn->exec($Query);

    echo "<h1>Table Created Successfully</h1>";
}catch(PDOException $e){
    echo $e->getMessage();
}

