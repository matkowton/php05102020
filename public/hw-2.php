<?php
/**1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
 *
 * если $a и $b положительные, вывести их разность;
 * если $а и $b отрицательные, вывести их произведение;
 * если $а и $b разных знаков, вывести их сумму;
 */
/*$a = 4;
$b = 8;

if ($a > 0 xor $b > 0) {
    echo $a + $b;
} elseif ($a < 0) {
    echo $a * $b;
} else {
    echo $a - $b;
}*/
/**
 * 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
 *
 * Обязательно использовать оператор return. */
$x = 7;
$y = 5;
/*
function sum(int $x, int $y): int
{
    return $x + $y;
}

function div(int $x, int $y): ?float
{
    if ($y != 0) {
        return $x / $y;
    }
}
*/
/*
function powr(int $x, int $pow) {
    if($pow == 1) {
        return $x;
    }
    return $x * powr($x, $pow - 1);
}

powr(5, 3);*/

/**7. *Написать функцию, которая вычисляет текущее время и возвращает его в
 * формате с правильными склонениями, например:
 *
 * 22 часа 15 минут
 * 21 час 43 минуты*/

function countEnding(int $count, string $ending1, string $ending2, string $ending3): string
{
    //0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23
    // часов  минут
    // час минута
    // часа минуты
    $ending = '';
    if ($count > 20) {
        $count %= 10;
    }

    if($count == 0 || $count > 4) {
        $ending = $ending1;
    } elseif ($count == 1) {
        $ending = $ending2;
    }else{
        $ending = $ending3;
    }
    return $ending;
}

$hours = 33;
echo $hours . " " . countEnding($hours, "часов", "час","часа");
echo $hours . " " . countEnding($hours, "минут", "минута","мнуты");
echo $hours . " " . countEnding($hours, "Условий", "условие","условия");