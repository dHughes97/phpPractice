<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statements</title>
</head>
<body>
    <form action="switchStatements.php" method="post">
        What was your grade?
        <input type="text" name="grade">
        <input type="submit">
    </form>
    <?php
        $grade = $_POST["grade"];
        switch($grade){
            case "A": 
                echo "You have an A!";
                break;
            case "B":
                echo "You have a B"; 
                break; 
            case "C":
                echo "You have a C"; 
                break; 
            case "D":
                echo "You have a D";
                break;
            case "F":
                echo "You have a F"; 
                break; 
            default: 
                echo "Invalid input, TYPE in A/B/C/D/F.";
        }
    ?>
</body>
</html>