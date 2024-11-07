<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break and Continue</title>
</head>
<body>
    <?php
        $a = -1;

        while($a<=20){

            if ($a<1){
                $a++;
                //This statement skip anything lesser than 1
                continue;
            }

            if ($a > 10){
                //This statement terminates the loop when A is greater than 10
                break;
            }

            echo "\n<h1>$a:Tomsax is the real Genius</h1>";
            
            $a++;
        }
    ?>
</body>
</html>