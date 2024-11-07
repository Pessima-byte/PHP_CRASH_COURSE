<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Variable</title>
</head>
<body>
    <?php
        $x = 10;

        function Multiplier_Of_Ten($a=1){

            //Using A Global variable that is outside the Functions
            global $x;

            return $a * $x;
        }

        echo "<h1>".Multiplier_Of_Ten(5)."</h1>";

        function Global_Variable($a = "a"){
            //Creating Global variable in a functions
            $GLOBALS[$a]=1;
        } 

        //This is me calling the function that creates the Variable 
        Global_Variable("Tom");

        // Using the variable
        echo "<h1>" . $GLOBALS["Tom"] . "</h1>";
    ?>
</body>
</html>