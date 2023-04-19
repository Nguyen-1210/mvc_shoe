<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\ProductController;
use App\Models\Category;
use App\Models\Products;

/**
 * Summary of HomeController
 */
class HomeController extends BaseController{

    /**
     * Summary of index
     *
     * @return void
     */
    public function index(){
        $category     = new Category();
        $product      = new Products();
        $fields       = [
            'id',
            'category_id',
            'title',
            'price',
            'percent_sale',
            'thumbnail',
            'description',
            'gender'
        ];
        $conditions   = [];
        $orderBy      = 'id asc';
        $collection   = $product->getAllProduct($fields, $conditions, $limit = 6, $orderBy);
        $listProducts = $product->getAllProduct($fields, $conditions, $limit = 12, $orderBy);
        $category = $category->getAllCategory($fields = ['id','name'], $conditions, $limit = 0, $orderBy = null);
        $data         = [
            'collection'   => $collection,
            'category' => $category,
            'listProducts' => $listProducts,
            'page_title'   => 'N & T',
            'content'      => 'home/client_home'
        ];

        return $this->render('layouts/client_layout', $data);
    }

}
