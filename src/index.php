<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>day 1 | learning PHP</title>
</head>
<body>
    <?php 
    // echo "learning php day 1 stream";

    // phpinfo();
    

    echo $_SERVER["HTTP_USER_AGENT"];

    $PAGE = "Our first page";
    echo $PAGE;
// /
// /about
// /contact

    if ($PAGE == "homepage"){
        echo "Homepage here!";
    }else{
        echo $PAGE;
    }

    ?>
</body>
</html>