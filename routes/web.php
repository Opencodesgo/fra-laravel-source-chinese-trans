<?php
/**
 * Web路由
 */

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes 	Web路由
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 这里你可以为你的应用注册web路由。
|
*/

Route::get('/', function () {
    return view('welcome');
});

// 增加index路由 localhost:9073/index
Route::get('/index', 'IndexController@index');
