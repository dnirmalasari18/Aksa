<?php

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('formProduct',function(){
    return view('form1');
});

Route::post('post','FormController@productAdd')->name('productForm');

Route::get('showProduct','TableController@productIndex')->name('showForm');
/*Route::get('formput',function(){
    return view('form2');
});

Route::put('put','FormController@formPut')->name('hasilPut');*/

Route::get('articleForm','PageController@article')->name('articleForm');
Route::post('articlePost','FormController@articlesAdd')->name('articlePost');
Route::get('articleShow','TableController@articleIndex')->name('articleShow');
Route::get('articleUpdate','TableController@articleUpdate');
Route::post('articleUpdate/updated/{id}','TableController@articleUpdated')->name('articleUpdated');
Route::get('articleDelete','TableController@articleDestroy');

route::get('categoryShow','TableController@categoryIndex')->name('categoryShow');

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');