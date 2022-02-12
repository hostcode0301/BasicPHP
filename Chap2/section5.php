<?php
// Integer number
echo "INTEGER <br>";

// Check int type
$checkNumber = 1.23;
var_dump(is_int($checkNumber));

// Max and min interger
echo "<br>" . PHP_INT_MAX;
echo "<br>" . PHP_INT_MIN;

// Float number
echo "<hr> FLOAT <br>";

// Check float number
var_dump(is_float("This is float number"));

// Max and min float
echo "<br>" . PHP_FLOAT_MAX;
echo "<br>" . PHP_FLOAT_MIN;


// Number functions
echo "<hr> NUMBER FUNCS <br>";

// Check is not number
var_dump(is_nan(5));

// Casting from string or float to int
echo "<br>" . (int)"1" + 2;
