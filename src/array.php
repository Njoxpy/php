<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <?php
    $students = array(
        "name" => "Njox",
        "age" => 27
    );

    // var_dump($students["name"]);
    echo "<br>";


    $wanafunzi = [
        "name" => "Abdul",
        "age" => 23,
    ];

    // var_dump($wanafunzi["name"]);

    
    // var_dump($students);
    echo "<br>";
    // var_dump($wanafunzi);
    echo "<br>";
    // echo get_debug_type($wanafunzi);

    $foods = array("apple", "mango", "avocado");
    // var_dump($foods[0]);

    // addition
    class addition{
        function perform_addton(){
            echo "performing addition!";
        }

        function performSubstraction(){
            echo "performing substraction";
        }
    }

    $add = new addition;
    $add->perform_addton();
    echo "<br>";
    $add->performSubstraction();
    
    ?>
</body>
</html>