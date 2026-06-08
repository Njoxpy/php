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

   

    // day 4
    
    enum Status{
    case paid;
    case pending;
    case canceled;
    };
    // field are defined

    // blog: draft, published, trash

    // backed enum
    enum BlogStatus: String
    {
        case draft = "draft";
        case published = "published";
        case trash = "trash";
    };

    // backed enum
    enum Students: int
    {
        case FirstYear = 1;
        case SecondYear = 2;
        case ThirdYear = 3;
        case FourthYear = 4;
    };

     enum Role{
        case admin;
        case super_admin;
        case employee;
    };

    echo "<br>";
    echo Role::admin->name;
    echo "<br>";
    echo Role::super_admin->name;
    echo "<br>";

    echo Students::FirstYear->name;
    echo "<br>";

    echo Students::SecondYear->value;

    // name and value


    ?>
</body>
</html>

<!-- enum should start with upper letter and fields for enums as well 
- for backed enums you can set value and name but for pure enums you only get the name and not value 
- naming conventions for classes
-->