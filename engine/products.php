<?php
require_once ENGINE_DIR . "db.php";
function getAllProducts()
{
    return queryAll("SELECT * FROM products");
}

function getProductById($id)
{
    return queryOne("SELECT * FROM products WHERE id = {$id}");
}

function getProductImages($id)
{
    return queryAll("SELECT * FROM product_images WHERE product_id = {$id}");
}