<?php

// Get the current date and time
$currentDate = date('Y-m-d H:i:s');

// Print the current date and time
echo "Current Date and Time: $currentDate <br>";

// Calculate yesterday's date
$yesterdayDate = date('Y-m-d H:i:s', strtotime('-1 hours', strtotime($currentDate)));

// Print yesterday's date
echo "Yesterday's Date: $yesterdayDate <br>";
echo date('Y-m-d H:i:s', time() - 60 * 60 * 24) . '<br>';

// Different format: https://www.php.net/manual/en/function.date.php
echo date('F j Y, H:i:s') . '<br>';

// Print current timestamp
echo time() . '<br>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php
$dateString = '2020-02-06 12:45:35';
$parsedDate = date_parse($dateString); 
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
$dateString = 'February 4 2020 12:45:35';

$parsedDate = date_parse_from_format('F j Y H:i:s', $dateString);
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';

?>