<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <form method="post">
        <input type="text" name="input">
        <input type="submit" value="Submit">
    </form>
    <br>

    <?php
        // checks if the POST has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // get the user input from the form
            $userIO = $_POST["input"]; // retrieves the user input from the input field

            // create the function sayHi
            function sayHi() {
                echo "Hello User! \n\n";
            }

            function userType($userIO) {
                echo "Type whatever you want here: $userIO \n";
            }
            
            sayHi();
            userType($userIO); // use the correct variable name here

        }
    ?>
</body>
</html>
