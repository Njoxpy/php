<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php classes</title>
</head>
<body>
    <?php

    class FootbalTeams{
        public $regulator = "FIFA";
        private $facilities = 23;
        protected $owner = "Njox";

        function print_info(){
    echo "<br>";
            echo $this->regulator;
    echo "<br>";

            echo $this->facilities;
    echo "<br>";

            echo $this->owner;
    echo "<br>";

        }

    };

    $teams = new FootbalTeams();
    echo $teams->regulator;
    echo "<br>";

    // echo $teams->facilities;
    echo "<br>";

    // echo $teams->owner;
    echo "<br>";

    $teams->print_info();
    echo "<br>";

    
    // class: 
    ?>
</body>
</html>

<!-- In PHP, both -> and :: are used to access the properties (variables) and methods (functions) of a class. The main difference lies in whether you are dealing with a specific instance of an object or the class itself.z -->

<!-- 
-> arrow object operator 
The Scope Resolution Operator (::)
-->