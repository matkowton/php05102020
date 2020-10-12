<?php
/*$i = 10;
//Цикл с предусловием
while (++$i < 10) {
    echo $i . "<br>";
}

//Цикл с постусловием
do {
    echo $i . "<br>";
} while (++$i < 10);

//Цикл со счетчиком
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        continue;
    }
    echo $i . "<br>";
}*/
/*
$array = [1, true, 'test', [1, 2], 12];

var_dump($array);

$array[] = 100;


$array[100] = 'Привет!!!';
$array['test'] = '100500';
var_dump($array);
*/

$article = [
    'title' => 'Article',
    'content' => 'kljsdksdjklsdjklsdjkl',
    'date' => date('Y-m-d'),
    'author' => [
        'first_name' => 'Vasya',
        'last_name' => 'Pupkin'
    ]
];


foreach ($article as $key => &$value) {
    if($key == 'title') {
        $value .= '111111111111111111111111111';
    }
}
unset($value);

$article2 = [
    'title' => 'Article2',
    'content' => '3433343434333434',
    'date' => date('Y-m-d'),
    'author' => [
        'first_name' => 'Petya',
        'last_name' => 'Vasechkin'
    ]
];

foreach ($article2 as $value) {
    $value++;
}

var_dump($article2);