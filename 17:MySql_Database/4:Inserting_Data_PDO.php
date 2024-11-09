<?php

include_once "./1:Establishing_Con_PDO.php";

try {
    // Specify the database to use (or do this in the PDO connection)
    $Conn->exec("USE TOM");

    // Correct SQL query syntax
    $QUERY = "INSERT INTO Student (Name, Age, Grade) VALUES (:Name, :Age, :Grade)";

    $STM = $Conn->prepare($QUERY);

    // Use bindValue for static values, or pass values directly in execute()
    $STM->bindValue(':Name', "Tommy Pessima");
    $STM->bindValue(':Age', 16);
    $STM->bindValue(':Grade', "Excellent");

    $STM->execute();

    echo "<h1>Data Inserted Successfully</h1>";

    $Conn = null;
} catch (PDOException $e) {
    echo $e->getMessage();
}
