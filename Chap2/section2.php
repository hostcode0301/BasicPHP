<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Variables scope

    // Global scope variable
    $simpHololive = "Rushia";
    $age = 1600;

    function localScope()
    {
        // Local scope variables
        $isSimp = true;

        // Access global variable via "global" keywork
        global $simpHololive;
        echo "In func: Do you simp $simpHololive? <br>";
    }

    localScope();

    echo "Out func: $simpHololive <br>";

    // Static scope
    function staticScope()
    {
        static $x = 0;
        echo "$x <br>";
        $x++;
    }

    staticScope();
    staticScope();
    staticScope();

    ?>
</body>

</html>