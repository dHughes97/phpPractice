<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post vs. Get</title>
</head>
<body>
    <!-- Get Example -->
    <!-- <form action="postVSGet.php" method="get">
        Password: <input type="password" name="password"> <br>
        <input type="submit">
    </form> -->
    <!-- Post Example -->
    <form action="postVSGet.php" method="post">
        Password: <input type="password" name="password"> <br>
        <input type="submit">
    </form>
    <br><br>


    <?php 
    // using post is more secure and doesnt show in url 
        echo $_POST["password"]
    // using get will show in url 
        // echo $_GET["password"]
    ?>
</body>
</html>