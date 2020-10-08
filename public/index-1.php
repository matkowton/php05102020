<?php
define("ROLE_USER", 1);
define("ROLE_ADMIN", 2);
define("ROLE_MODER", 3);

$userRole = ROLE_USER;

if ($userRole == ROLE_ADMIN) {
    echo "Панель администратора <br>";
} elseif ($userRole == ROLE_MODER) {
    echo "Панель модератора <br>";
} elseif ($userRole == ROLE_USER) {
    echo "Панель для пользователя <br>";
} else {
    echo "Панель для всех остальных <br>";
}

echo "наш сайт";

$permission = 0;
if ($userRole == ROLE_ADMIN) {
    $permission = 1111;
} else {

    $permission = 0001;
}

$permission = ($userRole == ROLE_ADMIN) ? 1111 : 0001;

$permission = $userRole ?: 'fljklkl';
$permission = $userRole ?? 'fljklkl';

switch ($userRole) {
    case ROLE_ADMIN:
        echo "Панель администратора <br>";
        break;
    case ROLE_MODER:
        echo "Панель модератора <br>";
        break;
    case ROLE_USER:
        echo "Панель для пользователя <br>";
        break;
    default:
        echo "Панель для всех остальных <br>";
};



$a = true;
$b = false;
$c = false;

$c = $a && $b;
$c = $a || $b;
$c = $a XOR $b;
$c = !$a;






