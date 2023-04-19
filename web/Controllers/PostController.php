<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Posts;
use App\Models\Users;


class PostController extends BaseController{
    private $_post;

    public function __construct() {

        $this->_post = new Users();
        }
    
        public function postRegsiter()
        {
            $conditions = [
            'id' >= 1
            ];
            $fields = [
                'fullname',
                'email',
                'password',
                'cpassword',
    
            ];
            $oneUser = $this->_post->viewUser($fields,$conditions);
     
           $data = [
            
            'content' => 'user/login',
           ];
            return $this->render('layouts/client_layout', $data);
        }
}
