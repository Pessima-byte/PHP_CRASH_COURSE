<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi_Dimensional_Array</title>
</head>
<body>
    <?php
        $Students = [
            ["Tommy",18,"Fair"],
            ["Victoria",16,"Fair"],
            ["Christopher",19,"Fair"],
            ["John",18,"Dark"],
            ["Simbo",20,"Dark"]
        ];


        foreach($Students as $Student){
            echo "\n<h1>".$Student[0]." is " .$Student[1]. " years old and ".$Student[2]." in complextion</h1>";
        }
    ?>
</body>
</html>