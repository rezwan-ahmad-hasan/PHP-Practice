<?php

// What is a variable

// Variable types
/*
    String
    Integer
    Float
    Boolean
    Null
    Array
    Object
    Resource
*/

// Declare variables
$name = "Zura";
$age = 28;
$isMale = true;
$height = 1.85;
$salary = null;

// Constants declaration
define('PI', 3.14);
echo PI.'<br>';
var_dump(defined('PI')); // defined(PI2)
echo '<br>';

// Print the variables. 
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

// Print variables types
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

// Print the whole variable with type
var_dump($name, $age, $isMale, $height, $salary);

// Change the value of the variable
$name = false;

// Variable checking functions
is_string($name); // false
is_int($age); // true
is_bool($isMale); // true
is_double($height); // true


// Check if variable is defined
var_dump(isset($name));
var_dump(isset($name2));
echo '<br>';

// Using PHP built-in constants
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';



// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo ($a + $b) * $c . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>'; 
echo $a / $b . '<br>';
echo $a % $b . '<br>';

?>