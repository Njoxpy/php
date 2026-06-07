<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resource</title>
</head>
<body>
    <?php
    $name = "Njox";

    if (is_resource($name)) {
        echo "This is the file resource";
    }else{
        echo "Oops not!";
    }

    enum role{
        case admin;
        case super_admin;
        case employee;
    }
    ?>
</body>
</html>