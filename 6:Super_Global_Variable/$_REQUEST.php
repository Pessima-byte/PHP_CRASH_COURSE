<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_REQUEST </title>
</head>
<body>
    <form method="GET" action="<?php echo $_SERVER["PHP_SELF"] ?>">

    <input type="text" placeholder="Name" name="Name">
    <input type="text" placeholder="Email" name="Email">
    <input type="submit">

    </form>

    <?php
        /*
            Request is a super global variable that contains submitted form data and all cookie data
        */
        echo "<h1>".$_REQUEST["Name"]."</h1>";
        echo "<h1>".$_REQUEST["Email"]."</h1>";
    ?>
</body>
</html>