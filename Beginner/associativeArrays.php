<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <form  method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>

    <?php 
        //Associative Array or Map - This is creating an instance 
        //of an array with Map notation 
        $grades = array("Jim"=>"A+", "Pam"=>"B-", "Dwight"=>"C+");
        //Jim is a key and A+ is the value 
        // echo $grades["Jim"];
        // echo $grades[$_POST["student"]];
        if(isset($_POST["student"])) {
            $student = htmlspecialchars($_POST["student"]);
            if(array_key_exists($student, $grades)) {
                echo $grades[$student];
            } else {
                echo "Student not found.";
            }
        }
        
    ?>
</body>
</html>