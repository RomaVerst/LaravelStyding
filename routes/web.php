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

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.'
], function(){
    Route::get('/','IndexController@index')->name('index');
    Route::match(['get', 'post'], '/create','IndexController@create')->name('create');
    Route::get('/edit/{news}','IndexController@edit')->name('edit');
    Route::get('/delete/{news}','IndexController@delete')->name('delete');
    Route::post('/update/{news}','IndexController@update')->name('update');
    Route::get('/test1','IndexController@test1')->name('test1');
    Route::get('/test2','IndexController@test2')->name('test2');
});



Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);


Route::group([
        'prefix' => 'news'
    ], function () {
    Route::get('/', 'NewsController@index')->name('news');
    Route::get('/categories', 'CategoryController@category_list')->name('category_list');
    Route::get('/categories/{category}', 'CategoryController@category')->name('category');
    Route::get('/chosed/{news}','NewsController@show')->name('news_one');
});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
