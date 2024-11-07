<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Array items</title>
</head>
<body>
    <?php

        $Fruits= array("Grapes","Banana","Apple");

        //Sorting in alphabet acending order
        sort($Fruits);

        //Sorting in alphabet decending order
        rsort($Fruits);



        foreach($Fruits as $x){
            echo "\n<h1>$x</h1>";
        }

        
        $Students = array("Simb0" => 105, "John" => 900 , "Tom" => 40);

        //Sorting Array in acending order of the values
        asort($Students);

        //Sorting Array in acending order of the keys
        ksort($Students);

        //Sorting Array in decending order of the keys
        krsort($Students);

        //Sorting Array in decending order of the values
        arsort($Students);

        echo "<h1>Associative Array</h1>";

        foreach($Students as $x => $y){
            echo "\n<h1>$x : $y </h1>";
        }


    ?>
</body>
</html>