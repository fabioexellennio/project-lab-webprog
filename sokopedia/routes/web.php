<?php

use App\Http\Controllers\HomepageController;
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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/search', 'HomeController@search')->name('search');


Route::get('/product/{id}', 'ProductController@viewProductDetail')->middleware(auth::class);
Route::get('/cart/{id}', 'ProductController@viewProductCart')->middleware(auth::class);

Route::post('/insert-cart/{id}', 'CartController@insertCart')->middleware(auth::class);
Route::get('/list-cart', 'CartController@viewCart')->middleware(auth::class);
Route::delete('/remove-cart/{id}', 'CartController@deleteCart')->middleware(auth::class);

Route::get('/list-cart/checkout', 'CartController@checkoutCart')->middleware(auth::class);
Route::get('/transaction', 'TransactionController@viewTransaction')->middleware(auth::class);
Route::get('/transaction-detail/{id}', 'TransactionController@viewDetail')->middleware(auth::class);


Route::get('/admin', 'AdminController@viewAdmin')->middleware(admin::class);

Route::get('/admin/view-product', 'AdminController@viewProductAdmin')->middleware(admin::class);
Route::delete('/admin/delete-product/{id}', 'AdminController@deleteProduct')->middleware(admin::class);
Route::get('/admin/insert-product', 'AdminController@insertProductAdmin')->middleware(admin::class);
Route::post('/admin/insert-product/inserted', 'AdminController@postInsertProduct')->middleware(admin::class);

Route::get('/admin/view-category', 'AdminController@viewCategoryAdmin')->middleware(admin::class);
Route::get('/admin/view-category-product/{id}', 'AdminController@viewProductCategory')->middleware(admin::class);
Route::get('/admin/insert-category', 'AdminController@insertCategoryAdmin')->middleware(admin::class);
Route::post('/admin/insert-category/inserted', 'AdminController@postInsertCategory')->middleware(admin::class);

Auth::routes();
