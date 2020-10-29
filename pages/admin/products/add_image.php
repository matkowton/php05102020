<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "files.php";
require VENDOR_DIR . "funcImgResize.php";
require ENGINE_DIR . "products.php";

if($_SERVER['REQUEST_METHOD'] == 'POST' && $productId = post('id')) {
        $filename = $_FILES['image']['name'];
        if(uploadFile('image', IMG_DIR)) {
            $originalName = IMG_DIR . $filename;
            $smallPath = IMG_DIR . 'small/' . $filename;
            img_resize($originalName, $smallPath, 200, 150);
            addProductImage($filename, $filename, $productId);
        }
}
redirect($_SERVER['HTTP_REFERER']);