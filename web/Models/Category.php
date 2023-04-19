<?php

namespace App\Models;
use App\Models\DeleteException;

class Category extends BaseModel{

    // ghi đè method và cả (thuộc tính) của class cha
    protected $table = "category";

    public function addCategory($data){
        var_dump($data);
        return $this->createData($this->table, $data);
    }

    public function updateCategory($id, $title){
        $data = [
            'name' => $title,
            'update_at' => date('Y-m-d H:i:s'),
        ];
        $conditions = [
            'id' => $id,
        ];

        return $this->updateData($this->table, $data, $conditions);
    }

    public function deleteCategory($conditions){
        return $this->deleteData($this->table, $conditions);
    }

    public function viewCategory($fields, $conditions){
        return $this->selectOne($this->table, $fields, $conditions);
    }

    public function getAllCategory($fields, $conditions, $limit = 0, $orderBy = null){
        return $this->readData($this->table, $fields, $conditions, $limit, $orderBy);
    }

    public function checkLogin($fields, $conditions, $limit = 1){
        return $this->readData($this->table, $fields, $conditions, $limit);
    }

}