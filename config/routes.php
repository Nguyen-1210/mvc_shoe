<?php

use App\Core\Request;
use App\Core\Route;
use App\Controllers\HomeController;
use App\Controllers\AdminController;
use App\Controllers\RegsiterController;
use App\Controllers\LoginController;
use App\Controllers\AuthController;
use App\Controllers\CategoryController;
use App\Controllers\ProductController;

$request = new Request();
try {

    // client
    Route::get('/', HomeController::class.'@index');
    Route::get('/login', LoginController::class.'@getLogin');
    Route::post('/login', LoginController::class.'@postLogin');
    Route::get('/regsiter', RegsiterController::class.'@getRegsiter');
    Route::post('/regsiter', RegsiterController::class.'@postRegsiter');
    Route::get('/detail_Product{id}', ProductController::class.'@detailProduct');

    // admin
    Route::get('/admin', AdminController::class.'@index');
    Route::get('/admin/list_Category',  AdminController::class.'@category');
    Route::get('/admin/list_Products', AdminController::class.'@product');

    // category
    Route::get('/admin/add_Category',  CategoryController::class.'@addCategory');
    Route::post('/admin/add_Category',  CategoryController::class.'@postAddCategory');
    Route::get('/admin/delete_Category{id}',  CategoryController::class.'@deleteCategory');
    Route::get('/admin/edit_Category{id}',  CategoryController::class.'@getOneCategory');
    Route::post('/admin/edit_Category{id}',  CategoryController::class.'@postEditCategory');

    // products
    Route::get('/admin/add_Product',  ProductController::class.'@addProduct');
    Route::post('/admin/add_Product',  ProductController::class.'@postAddProduct');
    Route::get('/listProductOfCategory{id}',  ProductController::class.'@listProductOfCategory');
    Route::get('/admin/delete_Product{id}',  ProductController::class.'@deleteProduct');
    Route::get('/admin/edit_Product{id}',  ProductController::class.'@getOneProduct');
    Route::post('/admin/edit_Product{id}',  ProductController::class.'@postEditProduct');
    

    Route::resolve();

} catch (Exception $e) {
    echo "Đã có lỗi sảy ra. Vui lòng liên hệ quản trị để được hỗ trợ";
}