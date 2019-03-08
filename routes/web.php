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