<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form_Handling</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">

        <input type="text" placeholder="Name" name="Name" >
        <input type="email" placeholder="Email" name="Email">
        <input type="password" placeholder="Password" name="Password">
        <input type="submit">

        <?php
            if($_GET["Empty"]=="On"){
                echo "<h1 style=\"color:red\">Please fill in fields</h1>";
            }
        ?>

    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){

            $Name=$_POST["Name"];
            $Email=$_POST["Email"];
            $Password=$_POST["Password"];

            $Empty=false;

            if(empty($Email)){
                $Empty=true;
            }

            if(empty($Password)){
                $Empty=true;
            }

            if(empty($Password)){
                $Empty=true;
            }

            if($Empty==true){
                header("Location:http://localhost/PHP_CRASH_CROUSE/7:Form_Validation/Form_Handling.php?Empty=On");
            }else{
                echo "<h1>Thanks for signing up $Name</h1>";
            }

        }
    ?>
</body>
</html>