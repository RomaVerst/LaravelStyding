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
    'as' => 'Admin.'
], function(){
    Route::get('/','IndexController@index')->name('Index');
    Route::get('/test1','IndexController@test1')->name('Test1');
    Route::get('/test2','IndexController@test2')->name('Test2');
});



Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'Home'
]);


Route::group([
        'prefix' => 'news'
    ], function () {
    Route::get('/', 'NewsController@index')->name('News');
    Route::get('/categories/', 'NewsController@category_list')->name('Category_List');
    Route::get('/categories/{category}', 'NewsController@category')->name('Category');
    Route::get('/{id}','NewsController@show')->name('NewsOne');
});