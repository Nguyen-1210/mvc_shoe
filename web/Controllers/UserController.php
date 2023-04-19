<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;

class UserController extends BaseController{
    private $_user;

    public function __construct() {

    $this->_user = new Users();
    }

    public function oneUser()
    {
        $conditions = [
        'id' => 1,
        ];
        $fields = [
            'id',
            'fullname',
        ];
        $oneUser = $this->_user->viewUser($fields,$conditions);
 
       $data = [
        'fullname' => $oneUser[0],
        'content' => 'content/user',
       ];
        return $this->render('layouts/admin_layout', $data);
    }
}
