<?php

namespace app\model;

class ProductModel
{
    public $productmodel;

    public function __construct()
    {
        $db = new DBConnect();
        $this->productmodel = $db->connect();
    }

    public function getById($id)
    {
        $sql = "select * from product where id = $id";
        $stmt = $this->productmodel->query($sql);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function getAll()
    {
        $sql = "select * from product";
        $stmt = $this->productmodel->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function delete($id)
    {
        $sql = "delete from product where id = $id";
        $this->productmodel->query($sql);
    }

    public function create($data)
    {
        $sql = "insert into product(name,price,quantity,date,description,category_id)values (?,?,?,?,?,?)";
        $stmt = $this->productmodel->prepare($sql);
       $stmt->bindParam(1,$data["name"]);
       $stmt->bindParam(2,$data["price"]);
       $stmt->bindParam(3,$data["quantity"]);
       $stmt->bindParam(4,$data["date"]);
       $stmt->bindParam(5,$data["description"]);
       $stmt->bindParam(6,$data["category_id"]);
       $stmt->execute();
    }

    public function edit($data, $id)
    {
        $sql = "update product set name = ?, price = ?, quantity = ?, date = ?, description = ?, category_id = ? where id = ?";
        $stmt = $this->productmodel->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["price"]);
        $stmt->bindParam(3, $data["quantity"]);
        $stmt->bindParam(4, $data["date"]);
        $stmt->bindParam(5, $data["description"]);
        $stmt->bindParam(6, $data["category_id"]);
        $stmt->bindParam(7, $id);
        $stmt->execute();
    }
}