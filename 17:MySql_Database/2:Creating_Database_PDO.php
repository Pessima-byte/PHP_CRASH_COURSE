<?php
include_once "./1:Establishing_Con_PDO.php";

try{
    //This is the query that creates the database
    $QUERY="CREATE DATABASE Tom; USE Tom";

    //This is the code that executes the query
    $Conn->exec($QUERY);

    echo "<h1>Database Created Successfully</h1>";
}catch(PDOException $e){
    echo $e->getMessage();
}