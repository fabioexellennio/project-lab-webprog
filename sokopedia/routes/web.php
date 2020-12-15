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


Route::get('/product/{id}', 'ProductController@viewProductDetail');
Route::get('/cart/{id}', 'ProductController@viewProductCart');

Route::post('/insert-cart/{id}', 'CartController@insertCart');
Route::get('/list-cart', 'CartController@viewCart');
Route::delete('/remove-cart/{id}', 'CartController@deleteCart');

Route::get('/list-cart/checkout', 'CartController@checkoutCart');
Route::get('/transaction', 'TransactionController@viewTransaction');
Route::get('/transaction-detail/{id}', 'TransactionController@viewDetail');


Route::get('/admin', 'AdminController@viewAdmin');

Route::get('/admin/view-product', 'AdminController@viewProductAdmin');
Route::delete('/admin/delete-product/{id}', 'AdminController@deleteProduct');
Route::get('/admin/insert-product', 'AdminController@insertProductAdmin');

Route::get('/admin/view-category', 'AdminController@viewCategoryAdmin');
Route::get('/admin/view-category-product/{id}', 'AdminController@viewProductCategory');
Route::get('/admin/insert-category', 'AdminController@insertCategoryAdmin');



Auth::routes();
