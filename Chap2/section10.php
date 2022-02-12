<?php
// While loop
$index = 0;
echo "While loop: ";
while ($index < 10) {
    echo $index . " ";
    $index++;
}

// Do loop
$index = 0;
echo "<br> Do loop: ";
do {
    echo "$index ";
    $index++;
} while ($index < 10);

// Foor loop
echo "<br> Foor loop: ";
for ($i = 0; $i < 10; $i++) {
    echo "$i ";
}

// Foreach loop
echo "<br> Foreach loop: <br>";
$hololiveJP = array("Rushia", "Kanata", "Matsuri");
// Value only
foreach ($hololiveJP as $value) {
    echo "$value <br>";
}

echo "<hr>";
// Key value
$hololiveJP = array(
    "Rushia" => "Necromancer",
    "Kanata" => "Angel",
    "Matsuri" => "Student"
);
foreach ($hololiveJP as $key => $value) {
    echo "$key: $value <br>";
}
