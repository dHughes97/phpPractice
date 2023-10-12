<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checking Boxes</title>
</head>
<body>

    <form action="checkingBoxs.php" method="post">
        <!-- [] stores all the things in an array -->
        Apples: <input type="checkbox" name="fruit[]" value="apples"><br>
        Oranges: <input type="checkbox" name="fruit[]" value="Oranges"><br>
        Pears: <input type="checkbox" name="fruit[]" value="Pears"><br>
        Avocados: <input type="checkbox" name="fruit[]" value="Avocados"><br>
        <input type="submit">
    </form>

    <?php
        $fruits = $_POST["fruit"];
        echo $fruits[1];
    ?>
</body>
</html>