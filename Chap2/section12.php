<?php
// Normal array
$arrayName = array("Rushia", "Kanata", "Matsuri", "Watame");

// Access array by index
echo "$arrayName[1] <br>";

// Associative array
$hololive = array(
    'Rushia' => "Necromacer",
    'Kanata' => "Angel",
    'Matsuri' => "Student",
    'Watame' => "Emergency food"
);

echo $hololive['Rushia'] . "<br>";

// Sort array
sort($hololive);
var_dump($hololive);
