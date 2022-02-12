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
    $name = "Uruha Rushia";

    // Length of string
    echo "Length: " . strlen($name) . " <br>";

    // Word count
    echo "Number of words: " . str_word_count($name) . "<br>";

    // Reverse a string
    echo "Reverse: " . strrev($name) . "<br>";

    // Position of subtring
    echo "Substring position: " . strpos($name, "Rushia") . "<br>";

    // Repace
    echo "Replace: " . str_replace("Uruha", "Kawaii", $name);

    ?>
</body>

</html>