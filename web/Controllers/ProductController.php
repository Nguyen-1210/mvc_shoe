<?php

namespace App\Controllers;

use App\Core\Request;
use App\Core\Upload;
use App\Core\ValidateInput;
use App\Models\Products;
use App\Models\Category;

class ProductController extends BaseController{

    private $_products;
    private $_messages = [];

    public function __construct(){

        $this->_products = new Products();
    }

    public function messages($messages = []){
        $this->_messages = $messages;
    }

    public function addProduct(){

        $data = [
            'page_title' => 'ADMIN',
            'content'    => 'products/addProduct',
            'action'     => '/admin/add_Product'
        ];

        return $this->render('layouts/admin_layout', $data);
    }

    public function postAddProduct(){
        $title       = $_POST['title'] ?? '';
        $price       = $_POST['price'] ?? '';
        $price_sale  = $_POST['price_sale'] ?? '';
        $thumbnail   = $_FILES['thumbnail'] ?? '';
        $description = $_POST['description'] ?? '';

        $validateInput = new ValidateInput();
        $success       = TRUE;
        if ($success){
            $upload = new Upload($thumbnail);
            if ($upload->uploadFile()){
                $img = $upload->getTargetFile();
                echo $img;
            }else{
                $img = '';
            }
            $addProduct = $this->_products->addProduct($title, $price, $price_sale, $img,
                $description);
        }

        if (!empty($addProduct)){
            $data = [];
            header('Location: ' . _WEB_ROOT . '/admin/list_Products');
        }else{
            $data = [
                'page_title' => 'ADMIN',
                'messages'   => 'THÊM SẢN PHẨM THÀNH CÔNG',
                'content'    => 'products/admin_list_product',
            ];
            header('Location: ' . _WEB_ROOT . '/admin/list_Category');
        }

        return $this->render('layouts/admin_layout', $data);
    }

    public function detailProduct(){
        $category   = new Category();
        $request    = new Request();
        $id         = $request->getParam('id');
        $fields     = [
            'id',
            'category_id',
            'title',
            'price',
            'percent_sale',
            'thumbnail',
            'description',
            'gender'
        ];
        $conditions = [
            'id' => $id
        ];
        $products   = $this->_products->viewProduct($fields, $conditions);
        $listProducts = $this->_products->getAllProduct($fields, $conditions = [], $limit = 12, $orderBy = null);
        $category = $category->getAllCategory($fields = ['id','name'], $conditions = [], $limit = 0, $orderBy = null);

        $data       = [
            'product'    => $products,
            'listProducts' => $listProducts,
            'category' => $category,
            'action'     => '/addCart?id=' . $id,
            'page_title' => 'N & T',
            'content'    => 'products/detailProduct'
        ];

        return $this->render('layouts/client_layout', $data);
    }
    public function listProductOfCategory(){

        $request    = new Request();
        $category   = new Category();
        $id         = $request->getParam('id');
        $fields     = [
            'id',
            'title',
            'price',
            'percent_sale',
            'thumbnail',
            'description',
            'gender'
        ];
        $relationFields = [
            'name'
        ];
        $fkey = 'category_id';
        $conditions = [
            'category_id' => $id
        ];
        $relationConditions = [];
        $relationTable = 'category';
        $listProducts   = $this->_products->getAllProductOfCategory($fields, $fkey , $conditions, $relationTable, $relationFields, $relationConditions, $limit = 0, $orderBy = NULL);
        $category = $category->getAllCategory($fields = ['id','name'], $conditions = [], $limit = 0, $orderBy = null);
        $data       = [
            'category' => $category,
            'listProducts'    => $listProducts,
            'page_title' => 'N & T',
            'content'    => 'products/client_list_product'
        ];
        return $this->render('layouts/client_layout', $data);
    }

}




