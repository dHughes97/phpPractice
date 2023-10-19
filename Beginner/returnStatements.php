<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Statements</title>
</head>
<body>
    <?php
        //Example for Return Statements in PHP
        function cube($num){
            //THIS: Using return keyword in function
            return $num * $num * $num;
        }

        $cubeResult = cube(4);
        echo $cubeResult; 
    ?>
</body>
</html>