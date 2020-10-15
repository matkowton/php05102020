<?php
//1
$a = -5;
$b = 3;
$result = calc($a, $b);
function calc(int $a, int $b)
{
    if ($a >= 0 || $b >= 0) {
        return $a - $b;
    } elseif ($a <= 0 || $b <= 0) {
        return $a * $b;
    } else {
        return ($a) + ($b);
    }
}

echo $result;

//2

function summation(int $a, int $b)
{
    return $a + $b;
}

function subtraction(int $a, int $b)
{
    return $a - $b;
}

function multiplication(int $a, int $b)
{
    return $a * $b;
}

function division(int $a, int $b)
{
    return $a / $b;
}

//3

function mathOperation(int $arg1, int $arg2, string $operation)
{
    switch ($operation) {
        case "summation":
            return summation($arg1, $arg2);
            break;
        case "subtraction":
            return subtraction($arg1, $arg2);
            break;
        case "multiplication":
            return multiplication($arg1, $arg2);
            break;
        case "division":
            return division($arg1, $arg2);
            break;

    }

}

echo '<br>';
echo mathOperation(5, 5, "division");

//4
$year = date('Y');
echo '<br>';
echo "Сейчас $year год";
echo '<br>';

//5

function power($val, $pow)
{
    if ($pow > 0) {
        return $val * power($val, $pow - 1);
    } else {
        return 1;
    }
}

$powerResult = power(5, 3);
echo "Результат функции power с val 5 и pow 3 = $powerResult";
echo '<br>';

//6

/*
 * час - 1 21
 * часа - 2 3 4 22 23
 * часов - 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 0
 *
 * минута 1
 * минуты 2 3 4
 * минут 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 0
 *
 *
 */

$hour = date('h');
$minute = date('i');
function timeOutput($hour, $minute)
{
    $hourString = "";
    $minuteString = "";
    $estimatedMinutes = $minute;
    if ($estimatedMinutes > 20) {
        $estimatedMinutes = estimateMinutes($estimatedMinutes);
    }
    if ($hour == 1 || $hour == 21) {
        echo $hourString = "$hour час ";
    } elseif (($hour >= 2 && $hour <= 4) || ($hour >= 22 && $hour <= 23)) {
        echo $hourString = "$hour часа ";
    } else {
        echo $hourString = "$hour часов ";
    }

    if ($estimatedMinutes == 1) {
        echo $minuteString = "$minute минута";
    } elseif ($estimatedMinutes >= 2 && $estimatedMinutes <= 4) {
        echo $minuteString = "$minute минуты";
    } else {
        echo $minuteString = "$minute минут";
    }

}

function estimateMinutes($minute)
{
//    if ($minute > 10) {
//        $minute -= 10;
//    } else {
//        return $minute;
//    }
//    estimateMinutes($minute);   -- хотел изначально сделать так, но что-то пошло не так
    while ($minute > 10) {
        $minute = $minute -10;
    }
    return $minute;
}

timeOutput($hour, $minute);




















