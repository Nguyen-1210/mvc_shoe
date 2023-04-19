<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;

class AdminController extends BaseController{

    public function index()
    {
        $data = [
            'page_title' => 'ADMIN',
            'content' => 'home/admin_home' 
        ];
        return $this->render('layouts/admin_layout', $data);
    }

    public function category(){

        $category = new Category();
        $fields     = [
            'id',
            'name',
            'create_at',
            'update_at',
        ];
        $conditions = [
            'id'
        ];
        $orderBy = 'id DESC';
        $category = $category->getAllCategory($fields, $conditions, 0, $orderBy);
        $data = [
            'category'   => $category,
            'page_title' => 'ADMIN',
            'content'    => 'category/admin_list_category'
        ];

        return $this->render('layouts/admin_layout', $data);
    }

    public function product(){
        $data = [
            'page_title' => 'ADMIN',
            'content'    => 'products/admin_list_product',
        ];
        return $this->render('layouts/admin_layout', $data);
    }
}
