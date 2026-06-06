<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php data types</title>
</head>
<body>
    <?php
// null
// bool
// int
// float (floating-point number)
// string
// array
// object
// callable
// resource
    $is_registered = true; 
    $name = "Njox"; // "" ''
    $age = 23;
    $marks = 34.55;

    // echo var_dump($is_registered);

    // var_dump($is_registered);

    echo "<br>";
    // var_dump($age, $marks);

    // var_dump prints the data type and the value int(23)
    // echo get_debug_type($marks);

    // if (get_debug_type($marks) == 'float') {
    //     echo "This is a float";
    // }

    // calculator
    // input valid data type?
    // is_int
    // 
    
    $user = null;

    echo $user;
    echo get_debug_type($user);

    echo is_null($user);

    ?>
</body>
</html>