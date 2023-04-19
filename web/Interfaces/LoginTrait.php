<?php

namespace App\Interfaces;

use App\Controllers\BaseController;
use App\Models\Users;

trait LoginTrait{

    public function getLogin($request){


        // BaseController::render('layouts/client_layout', $data);

    }

    public function logout($request){
        // Xử lý đăng xuất tại đây
    }

    public function isLoggedIn(){
        // Kiểm tra xem người dùng đã đăng nhập hay chưa
    }
}