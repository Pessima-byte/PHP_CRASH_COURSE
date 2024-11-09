<?php

include_once "./1:Establishing_Con_PDO.php";

try{
$Conn->exec("USE TOM");

$QUERY="DELETE FROM Student WHERE ID = ?";

$STM = $Conn->prepare($QUERY);

$STM->bindValue(1, 1);

$STM->execute();

echo "<h1>Data Deleted Successfully</h1>";

$Conn = null;
} catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}