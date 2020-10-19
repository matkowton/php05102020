<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";

$host = '127.0.0.1';
$login = 'root';
$password = 'root';
$db = 'php2020';

$connection = mysqli_connect($host, $login, $password, $db);
$id = mysqli_escape_string($connection, $_GET['id']);

$sql = "SELECT * FROM products WHERE id = {$id}";

$res = mysqli_query($connection, $sql);
$product = mysqli_fetch_all($res, MYSQLI_ASSOC)[0];

/*
while ($row = mysqli_fetch_assoc($res)) {
    var_dump($row);
}
*/
//$id = mysqli_insert_id($connection);

include VIEWS_DIR . "product.php";
?>




