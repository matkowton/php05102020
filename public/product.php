<?php
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "products.php";
require ENGINE_DIR . "render.php";

$id = get('id');
$product = getProductById($id);
$product['images'] = getProductImages($id);


$content = render("product", ['product' => $product]);
echo render('layout', ['content' => $content]);