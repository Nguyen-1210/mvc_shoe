<?php

namespace App\Models;


class Products extends BaseModel{

    // ghi đè method và cả (thuộc tính) của class cha
    protected $table = "products";

    public function addProduct($title, $price, $price_sale, $img, $description){
        $data = [
            'category_id'    => '113',
            'title'       => $title,
            'price'       => (int)$price,
            'percent_sale'  => (int)$price_sale,
            'thumbnail'   => $img,
            'description' => $description,
        ];
        var_dump($data);
        return $this->createData($this->table, $data);
    }

    // Sửa bài đăng
    public function updateProduct($id, $title, $content){
        $data       = [];
        $conditions = [];
        return $this->updateData($this->table, $data, $conditions);
    }

    // Xoá bài đăng
    public function deleteProduct($id){
        $conditions = [];
        return $this->deleteData($this->table, $conditions);
    }

    public function viewProduct($fields, $conditions){
        return $this->selectOne($this->table, $fields, $conditions);
    }

    public function getAllProductOfCategory($fields, $fkey , $conditions, $relationTable, $relationFields, $relationConditions, $limit = 0, $orderBy = NULL){
        return $this->selectWithRelation($this->table, $fields, $fkey , $conditions, $relationTable, $relationFields, $relationConditions, $limit = 0, $orderBy);
    }

    public function getAllProduct($fields, $conditions, $limit = NULL, $orderBy = NULL){
        return $this->readData($this->table, $fields, $conditions, $limit, $orderBy);
    }


    public function checkLogin($fields, $conditions, $limit = 1){
        return $this->readData($this->table, $fields, $conditions, $limit);
    }

}