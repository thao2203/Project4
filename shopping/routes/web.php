<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
Route::get('/', action:'App\Http\Controllers\HomeController@index');
Route::get('clientsearch/{key}', 'App\Http\Controllers\HomeController@search');
Route::get('/order-clients', 'App\Http\Controllers\OrderController@getOrderList');

Route::get('admin', 'App\Http\Controllers\AdminController@loginAdmin');

Route::post('admin', 'App\Http\Controllers\AdminController@postLoginAdmin');

Route::get('authlogin', 'App\Http\Controllers\HomeController@getAuthLogin');
Route::post('authlogin', 'App\Http\Controllers\HomeController@postAuthLogin');

Route::get('/home', function () {
	if(!auth()->check())
    	{
    		return redirect()->to('admin');
    	}
    return view('login');
});

Route::get('detail/{id}', 'App\Http\Controllers\HomeController@detail');

Route::get('categories/{id}', 'App\Http\Controllers\HomeController@category');
Route::get('categories-supplier/{id}/{sup_id}', 'App\Http\Controllers\HomeController@category_supplier');

Route::get('/chinh-sach', 'App\Http\Controllers\HomeController@aboutUs');

Route::get('/bai-viet', 'App\Http\Controllers\HomeController@blog');

Route::get('/chi-tiet-bai-viet/{id}', 'App\Http\Controllers\HomeController@blogDetail');
Route::get('/chi-tiet-bai-viet/{id}', 'App\Http\Controllers\HomeController@blogDetail');


Route::post('/add-to-cart', 'App\Http\Controllers\CartController@save_cart');

Route::post('/add-cart-ajax', 'App\Http\Controllers\CartController@add_cart_ajax');

Route::post('/them-don-hang', 'App\Http\Controllers\CartController@save_thanhToan');

Route::post('/update-cart', 'App\Http\Controllers\CartController@update_cart');

Route::get('/delete-product/{session_id}', 'App\Http\Controllers\CartController@delete_product');

Route::get('/del-all-product', 'App\Http\Controllers\CartController@delete_all_product');

Route::get('/chi-tiet-gio-hang', 'App\Http\Controllers\CartController@chiTietGioHang');

Route::get('/thanh-toan', 'App\Http\Controllers\CartController@thanhToan');

// Counpon /check-coupon
Route::post('/check-coupon', 'App\Http\Controllers\CartController@check_coupon');


Route::prefix('admin')->group(function () {
	Route::prefix('categories')->group(function () {
		//dùng list màn hình category
		Route::get('/', [
	    	'as' => 'categories.index',
	    	'uses' => 'App\Http\Controllers\CategoryController@index'
	    ]);
	    Route::get('/create', [
	    	'as' => 'categories.create',
	    	'uses' => 'App\Http\Controllers\CategoryController@create'
	    ]);
	    Route::post('/store', [
	    	'as' => 'categories.store',
	    	'uses' => 'App\Http\Controllers\CategoryController@store'
	    ]);

	    Route::get('/edit/{id}', [
	    	'as' => 'categories.edit',
	    	'uses' => 'App\Http\Controllers\CategoryController@edit'
	    ]);
	    
		Route::post('/update/{id}', [
	    	'as' => 'categories.update',
	    	'uses' => 'App\Http\Controllers\CategoryController@update'
	    ]);

	    Route::get('/delete/{id}', [
	    	'as' => 'categories.delete',
	    	'uses' => 'App\Http\Controllers\CategoryController@delete'
	    ]);
	});

	Route::prefix('blogs')->group(function () {
		//dùng list màn hình category
		Route::get('/', [
	    	'as' => 'blogs.index',
	    	'uses' => 'App\Http\Controllers\BlogController@index'
	    ]);
	    Route::get('/create', [
	    	'as' => 'blogs.create',
	    	'uses' => 'App\Http\Controllers\BlogController@create'
	    ]);
	    Route::post('/store', [
	    	'as' => 'blogs.store',
	    	'uses' => 'App\Http\Controllers\BlogController@store'
	    ]);

	    Route::get('/edit/{id}', [
	    	'as' => 'blogs.edit',
	    	'uses' => 'App\Http\Controllers\BlogController@edit'
	    ]);
	    
		Route::post('/update/{id}', [
	    	'as' => 'blogs.update',
	    	'uses' => 'App\Http\Controllers\BlogController@update'
	    ]);
	    Route::get('/delete/{id}', [
	    	'as' => 'blogs.delete',
	    	'uses' => 'App\Http\Controllers\BlogController@delete'
	    ]);
	});

	//PRODUCT
	Route::prefix('product')->group(function () {
		//dùng list màn hình product
		Route::get('/', [
	    	'as' => 'product.index',
	    	'uses' => 'App\Http\Controllers\AdminProductController@index'
	    ]);
	    Route::get('/create', [
	    	'as' => 'product.create',
	    	'uses' => 'App\Http\Controllers\AdminProductController@create'
	    ]);
		Route::post('/store', [
	    	'as' => 'product.store',
	    	'uses' => 'App\Http\Controllers\AdminProductController@store'
	    ]);
		Route::get('/edit/{id}', [
	    	'as' => 'product.edit',
	    	'uses' => 'App\Http\Controllers\AdminProductController@edit'
	    ]);
	    
		Route::post('/update/{id}', [
	    	'as' => 'product.update',
	    	'uses' => 'App\Http\Controllers\AdminProductController@update'
	    ]);
		Route::get('/delete/{id}', [
	    	'as' => 'product.delete',
	    	'uses' => 'App\Http\Controllers\AdminProductController@delete'
	    ]);
	});

	//ORDER
	Route::prefix('order')->group(function () {
		//dùng list màn hình product
		Route::get('/', [
	    	'as' => 'order.index',
	    	'uses' => 'App\Http\Controllers\OrderController@index'
	    ]);
		Route::get('/chi-tiet-don-hang/{id}',[
			'as' => 'order.detail',
			'uses' => 'App\Http\Controllers\OrderController@detail'
		]);
		 
	    // Route::get('/create', [
	    // 	'as' => 'orders.create',
	    // 	'uses' => 'App\Http\Controllers\OrderController@create'
	    // ]);
		// Route::post('/store', [
	    // 	'as' => 'orders.store',
	    // 	'uses' => 'App\Http\Controllers\OrderController@store'
	    // ]);
		// Route::get('/edit/{id}', [
	    // 	'as' => 'orders.edit',
	    // 	'uses' => 'App\Http\Controllers\OrderController@edit'
	    // ]);
	    
		// Route::post('/update/{id}', [
	    // 	'as' => 'orders.update',
	    // 	'uses' => 'App\Http\Controllers\OrderController@update'
	    // ]);
		// Route::get('/delete/{id}', [
	    // 	'as' => 'orders.delete',
	    // 	'uses' => 'App\Http\Controllers\OrderController@delete'
	    // ]);
	});
});

