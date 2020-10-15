<?php
//1
$i = 0;
while ($i < 100) {
    if ($i % 3 == 0) {
        echo $i . "<br>";
    }
    $i++;
}

//2
$i = 0;
$string = '';
do {
    if ($i == 0) {
        $string = ' - ноль';
    } elseif ($i % 2 == 0) {
        $string = ' - четное число';
    } else {
        $string = ' - нечетное число';
    }
    echo $i . $string . "<br>";
    $i++;
} while ($i < 11);

//3
$cities = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Спас-Клепики',],
];
foreach ($cities as $region => $city) {
    echo "<br>" . $region . ": <br>";
    foreach ($city as $index => $item) {
        if ($index != 0) {
            echo ", " . $item;
        } else {
            echo $item;
        }
    }
}

//4

$rule = [
    'а' => 'a', 'б' => 'b', 'в' => 'v',
    'г' => 'g', 'д' => 'd', 'е' => 'e',
    'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
    'и' => 'i', 'й' => 'y', 'к' => 'k',
    'л' => 'l', 'м' => 'm', 'н' => 'n',
    'о' => 'o', 'п' => 'p', 'р' => 'r',
    'с' => 's', 'т' => 't', 'у' => 'u',
    'ф' => 'f', 'х' => 'h', 'ц' => 'c',
    'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
    'ь' => '\'', 'ы' => 'y', 'ъ' => '\'',
    'э' => 'e', 'ю' => 'yu', 'я' => 'ya',

    'А' => 'A', 'Б' => 'B', 'В' => 'V',
    'Г' => 'G', 'Д' => 'D', 'Е' => 'E',
    'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z',
    'И' => 'I', 'Й' => 'Y', 'К' => 'K',
    'Л' => 'L', 'М' => 'M', 'Н' => 'N',
    'О' => 'O', 'П' => 'P', 'Р' => 'R',
    'С' => 'S', 'Т' => 'T', 'У' => 'U',
    'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
    'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch',
    'Ь' => '\'', 'Ы' => 'Y', 'Ъ' => '\'',
    'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
    ' ' => '_',
];
$subject = 'Вот такая вот строка';
$ru = [];
$en = [];
foreach ($rule as $ruLetter => $enLetter) {
    array_push($ru, $ruLetter);
    array_push($en, $enLetter);
}                                                          // не придумал способа сделать это с изначальным массивом
$newPhrase = str_replace($ru, $en, $subject);
echo "<br>" . $newPhrase . "<br>";

//5 сделал это в 4м задании

//6 не успел сделать :(

//7
for ($i = 1; $i <= 10; print  $i, $i++) {

}

//8
foreach ($cities as $region => $city) {
    echo "<br>" . $region . ": <br>";
    foreach ($city as $index => $item) {
        if (startsWith($item, 'К')) {
            echo $item . ', ';
        }

    }
}
function startsWith($haystack, $needle)
{ // эту функцию нашел в интернете
    $length = strlen($needle);
    return substr($haystack, 0, $length) === $needle;
}


//9 - сделано в 4



















