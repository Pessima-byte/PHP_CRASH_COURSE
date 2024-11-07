<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If_Else</title>
</head>
<body>
    <?php  
        $a = 10;
        $b = 5;
        $c = 9;

        //This is the traditional If else Syntax

        if ($a>$b){
            if ($c<$b){
                echo "<h1>Tommy is a genius</h1>\n\n";
            }else{
                echo "<h1>Tommy is the greatest of all time</h1>\n\n";
            }
        }

        //This is the shorthand syntax for if Else

        $Tom = 20;
        $Simbo = 20;
        $Ahmed = 18;

        echo $Ahmed > $Tom ? "<h1>Ahmed is older than Tommy</h1>" : 
        ($Ahmed > $Simbo ? "<h1>Ahmed is younger than Tom But older than Simbo" : "<h1>Ahmed is the youngest among his squad</h1>");



    ?>
</body>
</html>