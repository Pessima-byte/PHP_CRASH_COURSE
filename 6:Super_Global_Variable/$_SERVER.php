<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_SERVER SUPER_GLOBAL</title>
</head>
<body>
   <?php
        // $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.

        echo "<h1>".$_SERVER['PHP_SELF']."</h1>";
        echo "<h1>".$_SERVER['SERVER_NAME']."</h1>";
        echo "<h1>".$_SERVER['HTTP_HOST']."</h1>";
        echo "<h1>".$_SERVER['HTTP_REFERER']."</h1>";
        echo "<h1>".$_SERVER['HTTP_USER_AGENT']."</h1>";
        echo "<h1>".$_SERVER['SCRIPT_NAME']."</h1>";

    ?>
</body>
</html>