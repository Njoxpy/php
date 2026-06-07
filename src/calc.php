<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>
    
<?php 
class mathop{
    // addition
    function addition(){
        echo "performing addtion";
        // return a + b
    }

    // multiplication
    function multiplication(){
        echo "performing multiplication";
        // return a * b
    }

    // division
    function division(){
        echo "performing division";
        // return a / b
        // check if b is zero undefined
    }

    // sub
    function substraction(){
        echo "performing substraction";
        // return a - b
    }
}

$operation = new mathop;
$operation->addition();
echo "<br>";
$operation->substraction();
echo "<br>";
$operation->division();
echo "<br>";
$operation->multiplication();
echo "<br>";

var_dump($operation);
?>
    
</body>
</html>