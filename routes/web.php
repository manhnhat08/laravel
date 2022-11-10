<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandProduct;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/',[HomeController::class,'index']);

Route::get('/','App\Http\Controllers\HomeController@index');

Route::get('trang-chu','App\Http\Controllers\HomeController@index');

Route::get('home','HomeController@index');

Route::get('trangchu', [HomeController::class, 'index']);

Route::get('/admin',[AdminController::class,'index']);
Route::get('/dashboard',[AdminController::class,'show_dashboard']);
Route::post('/admin-dashboard',[AdminController::class,'dashboard']);
Route::get('/logout',[AdminController::class,'AuthLogin']);

Route::get('/add-category-product',[CategoryProduct::class,'add_category_product']);
Route::get('/all-category-product',[CategoryProduct::class,'all_category_product']);
Route::post('/save-category-product',[CategoryProduct::class,'save_category_product']);


//Brand Product
Route::get('/add-brand-product',[BrandProduct::class,'add_brand_product']);
Route::get('/all-brand-product',[BrandProduct::class,'all_brand_product']);
Route::post('/save-brand-product',[BrandProduct::class,'save_brand_product']);
Route::get('/unactive-brand-product/{brand_product_id}',[BrandProduct::class,'unactive_brand_product']);
Route::get('/active-brand-product/{brand_product_id}',[BrandProduct::class,'active_brand_product']);
Route::get('/edit-brand-product/{brand_product_id}',[BrandProduct::class,'edit_brand_product']);
Route::post('/update-brand-product/{brand_product_id}',[BrandProduct::class,'update_brand_product']);
Route::get('/delete-brand-product/{brand_product_id}',[BrandProduct::class,'delete_brand_product']);


Route::get('/add-product',[ProductController::class,'add_product']);
Route::post('/save-product',[ProductController::class,'save_product']);
Route::get('/all-product',[ProductController::class,'all_product']);
Route::get('/unactive-product/{product_id}',[ProductController::class,'unactive_product']);
Route::get('/active-product/{product_id}',[ProductController::class,'active_product']);
Route::get('/edit-product/{product_id}',[ProductController::class,'edit_product']);
Route::post('/update-product/{product_id}',[ProductController::class,'update_product']);
Route::get('/delete-product/{product_id}',[ProductController::class,'delete_product']);


Route::get('/danh-muc-san-pham/{slug_category_product}',[CategoryProduct::class,'show_category_home']);
Route::get('/thuong-hieu-san-pham/{brand_slug}',[BrandProduct::class,'show_brand_home']); 
Route::get('/chi-tiet-san-pham/{product_slug}','ProductController@details_product');

