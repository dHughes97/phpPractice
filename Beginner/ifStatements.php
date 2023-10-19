<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statements</title>
</head>
<body>
    <?php
        $isCool = false; 
        $isNerdy = true; 
        //Operators for conditional statements
        // &&(and) // ||(or)// !(isnot)//==(equal too)//!=(not equal too)//=== if they are equal and same type
        // Link for operators in PHP: https://www.w3schools.com/php/php_operators.asp
        if($isCool && $isNerdy){
            echo "You are a Cool and Nerdy!"; 
        } else if($isCool && !$isNerdy){
            echo "You are just cool!";
        } else if(!$isCool && $isNerdy){
            echo "You aren't cool but you are Nerdy!";
        }
        else {
            echo "You are not Cool or Nerdy!";
        }
    ?>
</body>
</html>