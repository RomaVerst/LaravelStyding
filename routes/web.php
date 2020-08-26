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
    Route::match(['get', 'post'], '/create','IndexController@create')->name('Create');
    Route::get('/edit/{news}','IndexController@edit')->name('Edit');
    Route::get('/delete/{news}','IndexController@delete')->name('Delete');
    Route::post('/update/{news}','IndexController@update')->name('Update');
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
    Route::get('/categories', 'CategoryController@category_list')->name('Category_List');
    Route::get('/categories/{category}', 'CategoryController@category')->name('Category');
    Route::get('/chosed/{news}','NewsController@show')->name('NewsOne');
});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
