<?php

namespace app\controller;

use app\model\ProductModel;

class ProductController
{
    public $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function showProduct()
    {
        $products = $this->productModel->getAll();
        include "app/view/list.php";
    }

    public function deleteProduct()
    {
        $this->productModel->delete($_GET["id"]);
        header("location:index.php?page=product-list");

    }

    public function createProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "app/view/create.php";
        } else {
            $this->productModel->create($_POST);
            header("location:index.php?page=product-list");
        }
    }

    public function editProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {

            $product = $this->productModel->getById($_GET["id"]);
            include "app/view/edit.php";
        } else {
            $this->productModel->edit($_POST, $_REQUEST["id"]);
            header("location:index.php?page=product-list");
        }
    }
}