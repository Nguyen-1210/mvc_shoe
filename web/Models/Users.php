<?php

namespace App\Models;

use App\Models\BaseModel;


class Users extends BaseModel
{

    public static $STATUS_ACTIVED = 1;

    public static $STATUS_BANNED = 0;

    protected $table = "users";

    public function createUser($data)
    {
        return $this->createData($this->table, $data);
    }
    
    public function updateUser($id, $title, $content)
    {
        $data = [ ];
        $conditions = [ ];
        return $this->updateData($this->table, $data, $conditions);
    }
    
    public function deleteUser($id)
    {
        $conditions = [ ];
        return $this->deleteData($this->table, $conditions);
    }
    
    public function viewUser($fields, $conditions )
    {
        return $this->readData($this->table, $fields, $conditions);
    }

    public function getAllUser($fields, $conditions, $limit = 0)
    {
        return $this->readData($this->table, $fields, $conditions, $limit);
    }

    public function checkLogin($fields, $conditions, $limit = 1)
    {
        return $this->readData($this->table, $fields, $conditions, $limit);
    }

}