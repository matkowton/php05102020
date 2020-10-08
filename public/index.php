<?php
//declare(strict_types=1);


$x = 5;
$y = 7;
var_dump($x);
echo calculateAverage($x, $y);
var_dump($x);
/*
$x = 2;
$y = 4;

echo calculateAverage($x, $y);

$x = 15;
$y = '15';

echo calculateAverage($x, $y);
*/
function calculateAverage(int $arg1, int $arg2): int
{
    return ($arg1 + $arg2) / 2;
}

// 5! = 5 * 4 * 3 * 2 * 1| 5! = 5 * 4!| 4! = 4 * 3!
//n! = n * (n - 1)!;
//рекурсия
/*var_dump(factorial(-5));

function factorial(int $n): int
{
    if($n == 1) {
        return $n;
    }
    return $n * factorial($n - 1);
}
*/

$foo = function() {
    echo "Я анонимко!!!";
    return 111;
};

$arr = [2, 4, 8];
$x = 3;
$power = function($elem) use ($x) {return $elem ** $x;};

$power = fn($elem) => $elem ** $x;

var_dump(array_map($power, $arr));
?>