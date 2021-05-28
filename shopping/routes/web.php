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

Route::get('/chinh-sach', 'App\Http\Controllers\HomeController@aboutUs');

Route::get('/lien-he', 'App\Http\Controllers\HomeController@contactUs');

Route::post('/add-to-cart', 'App\Http\Controllers\CartController@save_cart');

Route::get('/chi-tiet-gio-hang', 'App\Http\Controllers\HomeController@chiTietGioHang');



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

	Route::prefix('menus')->group(function () {
		//dùng list màn hình category
		Route::get('/', [
	    	'as' => 'menus.index',
	    	'uses' => 'App\Http\Controllers\MenuController@index'
	    ]);
	    Route::get('/create', [
	    	'as' => 'menus.create',
	    	'uses' => 'App\Http\Controllers\MenuController@create'
	    ]);
	    Route::post('/store', [
	    	'as' => 'menus.store',
	    	'uses' => 'App\Http\Controllers\MenuController@store'
	    ]);

	    Route::get('/edit/{id}', [
	    	'as' => 'menus.edit',
	    	'uses' => 'App\Http\Controllers\MenuController@edit'
	    ]);
	    
		Route::post('/update/{id}', [
	    	'as' => 'menus.update',
	    	'uses' => 'App\Http\Controllers\MenuController@update'
	    ]);
	    Route::get('/delete/{id}', [
	    	'as' => 'menus.delete',
	    	'uses' => 'App\Http\Controllers\MenuController@delete'
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
});

