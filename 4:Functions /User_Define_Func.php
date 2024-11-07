<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Define function</title>
</head>
<body>
<?php
     $name = "tOmMy";

    // Creating a custom function that combines two predefined functions
    function Display_Name( $name) {
        echo "<h1>" . strtoupper($name) . "</h1>";
        echo "<h1>" . strtolower($name) . "</h1>";
    }

    Display_Name($name);

    // Adding two numbers and returning a value
    function Total( $a,  $b) {
        return "<h1>" . ($a + $b) . " is the Total</h1>";
    }

    echo Total(5, 10);
?>

</body>
</html>