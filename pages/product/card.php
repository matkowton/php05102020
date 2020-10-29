<?php
$id = get('id');
$product = getProductById($id);
$product['images'] = getProductImages($id);
echo render('product', ['product' => $product]);