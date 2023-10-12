<!DOCTYPE html>
<!-- To host server right click on the document and choose PHP Server:Serve Project -->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP freecodecamp Lessons2</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!-- Creating Name and sumbit button -->
        <form action="site2.php" method="get">
            Name: <input type="text" name="username">
            <input type="submit">
            Age: <input type="number" name="userage">
            <input type="submit">
        </form>
        <br> 
        <?php 
            if(isset($_GET["username"])){
                echo 'Your name is ' . $_GET["username"];
                echo "<br>";
            }
            
            if(isset($_GET["userage"])){
                echo 'Your age is ' . $_GET["userage"];
            }
        ?>
    </body>
</html>
