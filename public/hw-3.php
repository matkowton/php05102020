<?php
/*
$cities = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Шилово', 'Михайлов', 'Касимов']
];

foreach ($cities as $key => $value) {
    echo "$key:<br/>";
    $lastElement = end($value);
    foreach ($value as $intvalue) {
        if ($intvalue == $lastElement) {
            $intvalue .= "<br/>";
        }
        echo "$intvalue, ";

    }
}
*/
function translate(string $string): string {
    $dictionary = [
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ё' => 'ye',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'й' => 'y',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'kh',
        'ц' => 'ts',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'shch',
        'ъ' => '',
        'ы' => 'y',
        'ь' => '',
        'э' => 'e',
        'ю' => 'yu',
        'я' => 'ya'
    ];
    $result = '';

    $splitted = str_split($string, 2);
    foreach ($splitted as $letter) {
        $result .= $dictionary[$letter];
    }
    return $result;

}

echo translate("строка");

//ASCII
