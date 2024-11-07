<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Method</title>
</head>
<body>
    <form Method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">

        <input type="text" placeholder="Name" name="Name">
        <input type="text" placeholder="Email" name="Email">
        <input type="submit">

    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){

            $Name= $_POST['Name'];
            $Email= $_POST['Email'];
    
            echo "<h1>Hi $Name Welcome to our company we will get to you via $Email</h1>";
        }

    ?>
</body>
</html>