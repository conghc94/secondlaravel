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

// Route::get('/index', function () {
//     return view('welcome');
// });
Route::get('/index',['as' => 'index', 'uses' => 'IndexController@index']);
Route::get('/detail-document/{id?}',['as' => 'detail-document', 'uses' => 'IndexController@detailDocument']);
Route::get('/detail-category/{id?}',['as' => 'detail-category', 'uses' => 'IndexController@detailCategory']);
Route::get('/demo', ['as'=>'','uses' =>'UserController@index']);
Auth::routes();

Route::get('/home', 'HomeController@index');
