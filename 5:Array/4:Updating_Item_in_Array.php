<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating new items</title>
</head>
<body>
    <?php

        $Fruits= array("Apple","Banana","Grapes");

        //Updates the array using it's index
        $Fruits[0]="Mango";

        echo "<h1>Index Array</h1>";

        foreach($Fruits as $x){
            echo "\n<h1>$x</h1>";
        }

        $Students = array(1 => "Simbo", 2 => "Tommy" , 3 => "Victoria");

        //Updates the Array using it's key
        $Students[1]="Paul";


        echo "<h1>Associative Array</h1>";

        foreach($Students as $x => $y){
            echo "\n<h1>$x : $y </h1>";
        }


    ?>
</body>
</html>