 <?php

 try{
include_once "./1:Establishing_Con_PDO.php";

 // Specify the database to use (or do this in the PDO connection)
 $Conn->exec("USE TOM");
 
 // Correct SQL query syntax
 $QUERY = "UPDATE Student SET Name= :Student WHERE ID = :ID";

 $STM = $Conn->prepare($QUERY);

 $STM->bindValue(':Student', "John Doe");

 $STM->bindValue(':ID', 2);

 $STM->execute();

 echo "<h1>Data Updated Successfully</h1>";

 $Conn = null;
 }catch(Exception $e){
    echo "Error: " . $e->getMessage();
 }