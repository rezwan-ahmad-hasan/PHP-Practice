<?php

$a = 97;

// echo $a++ .'<br>';
// echo ++$a .'<br>';

// echo $a-- .'<br>';
// echo --$a .'<br>';

$number = 125619874984134.56446;
$english_format_number = number_format($number, 3, '.', ',');
echo $english_format_number;


?>