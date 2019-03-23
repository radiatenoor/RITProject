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
Route::get("/user/data",
    "UserOneController@index")->name("index");
Route::get("/user/form",
    "UserOneController@create")->name("user.form");
Route::post("/users/forms",
    "UserOneController@store")->name("store.user");
Route::get("/show/all/users",
    "UserOneController@showAll");
Route::get("post/form","UserOneController@showPostForm");
Route::post("store/post/data",
    "UserOneController@storePostData")->name("store.post");
Route::get("show/all/post","UserOneController@allPost");
// url get parameter
Route::get("/edit/user/form/{user_id}",
    "UserOneController@showEditUserForm")
    ->name('edit.user');
Route::post("/update/user/{user_id}","UserOneController@updateUser")->name('update.user');

// delete route
Route::get("/delete/user/{id}","UserOneController@deleteUser")->name('delete.user');

Route::get("show/all/orders","UserOneController@allOrders");