<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::middleware(['auth'])->group(function(){
    Route::resource('medicines','ProductController');
    Route::resource('category_Medicine','CategoryController');
    Route::post('/medicines/showInfo','ProductController@showInfo')->name('product.showInfo');
    Route::get('/listTransaction','TransactionController@listTransaction');
    Route::post('transaction/showDataAjax/','TransactionController@showAjax')->name('transaction.showAjax');
    Route::get('/category_Medicine/showCategory', 'CategoryController@showCategory')->name('category_Medicine.showCategory');
    Route::post('/category_Medicine/getEditForm','CategoryController@getEditForm')->name('category_Medicine.getEditForm');
    Route::post('/category_Medicine/getEditForm2','CategoryController@getEditForm2')->name('category_Medicine.getEditForm2');
    Route::post('/medicines/getEditForm','ProductController@getEditForm')->name('medicines.getEditForm');
    Route::post('medicines/saveDataField','ProductController@saveDataField')->name('medicines.saveDataField');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','ProductController@front_index');
Route::get('cart','ProductController@cart');
Route::get('add-to-cart/{id}','ProductController@addToCart');
Route::get('/checkout','TransactionController@form_submit_front')->middleware(['auth']);
Route::get('/submit_checkout','TransactionController@submit_front')->name('submitcheckout')->middleware(['auth']);
