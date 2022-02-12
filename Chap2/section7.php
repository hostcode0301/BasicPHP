<?php

// Arithmetic 
echo "Power: " . 2 ** 3 . "<br>";

// Assignment
$a = 2;
$a += 3;
echo "Assignment: " . $a . "<br>";

// Comparison 
var_dump(2 == 3);
echo "<br>";

// Increment
$b = 0;
echo "Increment: " . $b++ . "<br>"; // Try go guest the value.

// Logical
$c = false;
echo "Logical: ";
var_dump(!$c);
echo "<br>";

// String
$str1 = "Uruha";
$str2 = "Rushia";
$concat = $str1 . $str2;
$str1 .= $str2;
echo "Concat: " . $concat . "<br>";
echo "Append: " . $str1 . "<br>";
