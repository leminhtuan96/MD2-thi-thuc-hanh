<?php

use app\controller\ProductController;

require "vendor/autoload.php";

$product = new ProductController();

$page = $_GET["page"] ?? "";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index.php?page=product-list">Trang chu</a>
<?php
switch ($page) {
    case "product-list":
        $product->showProduct();
        break;
    case "product-delete":
        $product->deleteProduct();
        break;
    case "product-create":
        $product->createProduct();
        break;
    case "product-edit":
        $product->editProduct();
        break;
}
?>
</body>
</html>
