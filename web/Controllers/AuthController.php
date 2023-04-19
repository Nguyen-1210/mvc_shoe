<?php


namespace App\Controllers;

use App\Interfaces\LoginTrait;
use App\Models\Users;

class AuthController extends BaseController
{

    use LoginTrait;

    public function getLogin($request)
    {
        $this->getLogin($request);
        // Xử lý sau khi đăng nhập thành công
    }
}