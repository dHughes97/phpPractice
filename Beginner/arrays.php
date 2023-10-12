<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $friends = array("kevin", "karen", "oscar", "jim");
        $friends[2] = "yo";
        echo $friends[2]; 
        echo "<br>";
        echo $friends[3];
    ?>
</body>
</html>