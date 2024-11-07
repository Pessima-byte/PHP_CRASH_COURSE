<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding new items</title>
</head>
<body>
    <?php

        $Fruits= array("Apple","Banana","Grapes");

        //Adding single item to an index array;
        $Fruits[4]="Mango";

        //Adding multiple items to an index array 
        array_push($Fruits,"Orange","Berry");

        echo "<h1>Index Array</h1>";

        foreach($Fruits as $x){
            echo "\n<h1>$x</h1>";
        }

        $Students = array(1 => "Simbo", 2 => "Tommy" , 3 => "Victoria");

        //Adding single item to an Associative array
        $Students [4] = "Ahmed";

        //Adding multiple items to an Associative array 
        $Students += [ 5 => "Haja" , 6 => "Pedri"];

        echo "<h1>Associative Array</h1>";

        foreach($Students as $x => $y){
            echo "\n<h1>$x : $y </h1>";
        }


    ?>
</body>
</html>