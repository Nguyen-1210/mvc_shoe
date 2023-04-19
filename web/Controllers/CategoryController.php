<?php

namespace App\Controllers;

use App\Core\Request;
use App\Core\ValidateInput;
use App\Models\Category;

class CategoryController extends BaseController{

    private $_category;
    private $_messages = [];

    public function __construct(){

        $this->_category = new Category();
    }

    public function messages($messages = []){
        $this->_messages = $messages;
    }

    public function addCategory(){
        $data = [
            'page_title' => 'ADMIN',
            'content'    => 'category/addCategory',
            'action'     => '/admin/add_Category'
        ];

        return $this->render('layouts/admin_layout', $data);
    }

    public function postAddCategory(){
        $title         = $_POST['title'] ?? '';
        $data          = [
            'name'   => $title,
        ];
        $validateInput = new ValidateInput();
        if ($validateInput->isEmpty($title)){
            $_SESSION['error']['title'] = "Tên danh mục không được để trống";
        }else{
            $_SESSION['error']['title'] = NULL;
        }
        if (!$validateInput->isValid){
            header('Location: /admin/list_Category');
        }
        $addCategory = $this->_category->addCategory($data);
        if (!empty($addCategory)){
            $data = [];
            header('Location: ' . _WEB_ROOT . '/admin/list_Category');
        }else{
            $data = [
                'page_title' => 'ADMIN',
                'messages'   => 'THÊM SẢN PHẨM THÀNH CÔNG',
                'content'    => 'category/admin_list_category'

            ];
            header('Location: ' . _WEB_ROOT . '/admin/list_Category');
        }

        return $this->render('layouts/admin_layout', $data);
    }

    public function deleteCategory(){

        $request    = new Request();
        $id         = $request->getParam('id');
        $conditions = [
            'id' => $id
        ];
        $this->_category->deleteCategory($conditions);
        $data = [
            'page_title' => 'ADMIN'
        ];
        header('Location: ' . _WEB_ROOT . '/admin/list_Category');

        return $this->render('layouts/admin_layout', $data);
    }

    public function getOneCategory(){

        $request    = new Request();
        $id         = $request->getParam('id');
        $fields     = [
            'id',
            'name',
        ];
        $conditions = [
            'id' => $id
        ];
        $category   = $this->_category->viewCategory($fields, $conditions, 0);
        $data       = [
            'category'   => $category,
            'action'     => '/admin/edit_Category?id=' . $id,
            'page_title' => 'ADMIN',
            'content'    => 'category/editCategory'
        ];


        return $this->render('layouts/admin_layout', $data);
    }

    public function postEditCategory(){

        $validateInput = new ValidateInput();
        $request       = new Request();
        $id            = $request->getParam('id');
        $title         = $_POST['title'] ?? '';
        $this->_category->updateCategory($id, $title);
        $data = [
            'page_title' => 'ADMIN',
            'content'    => 'category/admin_list_category'
        ];

        header('Location: ' . _WEB_ROOT . '/admin/list_Category');

        return $this->render('layouts/admin_layout', $data);
    }

}




