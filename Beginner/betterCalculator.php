<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Better Calculator</title>
</head>
<body>
    <h1>Basic Calculator</h1>
    <h2>Input an Operator for Arithmetic</h2>
    <ul>
        <li>+</li>
        <li>-</li>
        <li>*</li>
        <li>/</li>
        <li>%</li>
        <li>**</li>
    </ul>

    <form action="betterCalculator.php" method="post">
        <!-- Input 1st Number -->
        First Number: <input type="number" name="num1"> <br>
        <!-- Input a arithmetic operator -->
        Type of Operation: <input type="text" name="op"> <br>
        <!-- Input 2nd Number -->
        Second Number: <input type="number" name="num2"> <br>
        <input type="submit">
    </form>
    <?php
    //isset() function checks to see if hte variables passed in are set and are not NULL
    //In the case below all of the variables are not NULL, so it goes into the conditional.
        if (isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["op"])) {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $op = $_POST["op"];

            if ($op == "+") {
                echo $num1 + $num2;
            } elseif ($op == "-") {
                echo $num1 - $num2;
            } elseif ($op == "*") {
                echo $num1 * $num2;
            } elseif ($op == "/") {
                echo $num1 / $num2;
            } elseif ($op == "%") {
                echo $num1 % $num2;
            } elseif ($op == "**") {
                echo $num1 ** $num2;
            } else {
                echo "ERROR: NOT VALID OPERATOR INPUT\n";
            }
        }
    ?>
</body>
</html>
