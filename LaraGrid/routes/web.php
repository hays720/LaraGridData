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

Route::get('/',['uses'=>'IndexController@Data', 'as' => 'home']);
Route::post('/AddForm',['uses'=>'AddDatabase@AjaxAdd', 'as' => 'AddForm']);
Route::post('/UpdateForm',['uses'=>'UpdateDatabase@AjaxUpdate', 'as' => 'UpdateForm']);
Route::post('/DeleteForm',['uses'=>'DeleteDatabase@AjaxDelete', 'as' => 'DeleteForm']);