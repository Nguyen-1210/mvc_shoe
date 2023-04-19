<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;

class LoginController extends BaseController{

    private $_users;

    public function __construct(){

        $this->_users = new Users();
    }

    public function getLogin(){
        $data = [
            'page_title' => 'N & T',
            'content'    => 'user/login',
        ];
        return $this->render('layouts/client_layout', $data);
    }

    public function postLogin(){

        $email    = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $fields   = [
            'id'
        ];
        $conditions = [
            'email'    => $email,
            'password' => $password
        ];
        $userLogin = $this->_users->checkLogin($fields, $conditions, 1);
        if (!empty($userLogin)){

            $_SERVER['user']['userId'] = $userLogin[0]['id'];
            header('Location: ' . _WEB_ROOT . '/');
        }else{
            $data = [
                'messages'   => 'Không tìm thấy tài khoản',
                'page_title' => 'N & T ',
                'content'    => 'user/login'
            ];
        }
        return $this->render('layouts/client_layout', $data);
    }
}

