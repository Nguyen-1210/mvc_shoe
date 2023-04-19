<?php

namespace App\Controllers;

use App\Models\Users;

class RegsiterController extends BaseController{

    private $_users;

    public function __construct(){

        $this->_users = new Users();
    }

    public function getRegsiter(){
        $data = [
            'content' => 'user/regsiter',
        ];

        return $this->render('layouts/client_layout', $data);
    }

    public function postRegsiter(){
        $fullname  = $_POST['fullname'] ?? "";
        $phone     = $_POST['phone'] ?? "";
        $email     = $_POST['email'] ?? "";
        $password  = $_POST['password'] ?? "";
        $cpassword = $_POST['cpassword'] ?? "";
        $password  = $cpassword;

        $data         = [
            'fullname' => $fullname,
            'phone'    => $phone,
            'email'    => $email,
            'password' => $password
        ];
        $userRegsiter = $this->_users->createUser($data);
        if (!empty($userRegsiter)){
            $data                      = [
            ];
            $_SERVER['user']['userId'] = $userRegsiter[0]['id'];
            header('Location: ' . _WEB_ROOT . '/login');
        }else{
            $data = [
                'page_title' => 'N & T ',
                'content'    => 'user/regsiter'
            ];
        }
        return $this->render('layouts/client_layout', $data);
    }

}
