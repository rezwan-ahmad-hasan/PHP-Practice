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

?>