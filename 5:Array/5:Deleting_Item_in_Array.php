<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleting items</title>
</head>
<body>
    <?php

        $Fruits= array("Apple","Banana","Grapes");

        array_push($Fruits,"Orange","Berry","Mango");

        //Deleting the First Item of an array 
        array_shift($Fruits);

        //Deleting the Last Item of an array 
        array_pop($Fruits);
        
        //Deleting using array_splice identity the index you want to delete and how many item
        array_splice($Fruits,2,1);
        
        //Deleting array by creating new array
        $NewFruitArray = array_diff($Fruits,["Banana","Grapes"]);


        echo "<h1>Index Array</h1>";

        foreach($Fruits as $x){
            echo "\n<h1>$x</h1>";
        }

        echo "<h1>New Array</h1>";

        foreach($NewFruitArray as $x){
            echo "\n<h1>$x</h1>";
        }

        $Students = array(1 => "Simbo", 2 => "Tommy" , 3 => "Victoria");

        $Students += [ 5 => "Haja" , 6 => "Pedri"];

        //Deleting using unset
        unset($Students[6]);

        echo "<h1>Associative Array</h1>";

        foreach($Students as $x => $y){
            echo "\n<h1>$x : $y </h1>";
        }


    ?>
</body>
</html>