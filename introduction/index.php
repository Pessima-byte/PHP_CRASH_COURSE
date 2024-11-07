<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starts</title>
</head>
<body>
    <?php 
        //This is a basic demostration of Constant variable

        const Game = "Football";

        echo "<h1>" . Game . "</h1>";

        define("Games",["Football","Tennis"]);

        echo "<h1>" . Games[1] . "</h1>";
    ?>
</body>
</html>