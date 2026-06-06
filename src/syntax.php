<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>day 2 learning php</title>
</head>
<body>
    <p>This is going to be ignored by the browser</p>
    <?php

    echo "Hello world \n";
    ?>
    <p>This is going to be ignored by the browser as well</p>

    <?php if ($expression == true): ?>
    This will show if the expression is true.
    <?php else: ?>
    Otherwise this will show.
    <?php endif; ?>

    <?php
    // single line comment
    /*
    multiline comment
     
    */
    ?>

    

</html>