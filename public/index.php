<?php
/*
$a = 1;
$b = &$a;
$b = 4;
var_dump($a, $b);

define('PI_DIGIT', 3.14);

var_dump(PI_DIGIT);

$integer = 10;
$float = 0.75;
$string_single = 'это строка';
$string_double = "это тоже строка";
$boolean = true;

$array = [1, 2 , 5, 8];
$object = new stdClass();
$resource = fopen('test.txt', 'a+');

$null = null;
*/

/* Операции со строками */
$n = 10;
$string_single = 'это $n \n\t строка';
$string_double = "это {$n} \n\t тоже строка";

echo $string_single;
echo "<br>";
echo $string_double ;

# Операции с числами
/*$a = 5;
$b = 7;
echo $a + $b;
echo $a - $b;
echo $a / $b;
echo $a * $b;
echo $a % $b;
echo $a ** $b;

var_dump($a++);
var_dump($a);

$a *= 5;
*/

// Операции сравнения
$a = 5;
$b = 7;

var_dump($a == $b);
var_dump($a === $b);
var_dump($a != $b);
var_dump($a !== $b);
var_dump($a > $b);
var_dump($a < $b);
var_dump($a <= $b);
var_dump($a >= $b);

var_dump($a <=> $b);









