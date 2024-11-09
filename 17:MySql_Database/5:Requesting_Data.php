<?php
include_once "./1:Establishing_Con_PDO.php";

try {
    $Conn->exec("USE TOM;");

    $QUERY= "SELECT * FROM Student WHERE Name = :Name ";
    $STM = $Conn->prepare($QUERY);
    $STM->bindValue(':Name', "Tommy Pessima");
    $STM->execute();
    $Student = $STM->fetch(PDO::FETCH_ASSOC);

    if($Student){
     echo "<h1>Student Found</h1>";
     echo "<h2>Name: ". $Student['Name']. "</h2>";
     echo "<h2>Age: ". $Student['Age']. "</h2>";
     echo "<h2>Grade: ". $Student['Grade']. "</h2>";
     } else {
     echo "<h1>Student Not Found</h1>";
     }
     $Conn = null;

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}