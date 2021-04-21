<?php

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






Route::get('dashboard', function () {
    return view('admin/dashboard');
});

			//Admin Panel

// Category Routes
Route::get('view-category',"CategoryController@index");
Route::get('create-category',"CategoryController@create");
Route::post('save-category',"CategoryController@store");
Route::get('delete-category/{id}',"CategoryController@destroy");
Route::get('edit-category/{id}',"CategoryController@edit");
Route::post('update-category/{id}',"CategoryController@update");
//Artical Routes
Route::get('view-artical',"ArticalController@index");
Route::get('create-artical',"ArticalController@create");
Route::post('save-artical',"ArticalController@store");
Route::get('delete-artical/{id}',"ArticalController@destroy");
Route::get('edit-artical/{id}',"ArticalController@edit");
Route::post('update-artical/{id}',"ArticalController@update");

//Newsletter Routes
Route::get('view-newsletter',"NewsletterController@index");
Route::get('create-newsletter',"NewsletterController@create");
Route::post('save-newsletter',"NewsletterController@store");
Route::get('delete-newsletter/{id}',"NewsletterController@destroy");

//Message Routes
Route::get('view-message',"MessageController@index");
Route::get('delete-message/{id}',"MessageController@destroy");



			//User Panel

//Home Page for user
Route::get('/', function () {
    return view('user/user_view');
});
Route::get('/video',"UserController@video");
Route::get('/index',"UserController@artical");
//Contact us or Message
Route::get('create-message',"MessageController@create");
Route::post('send-message',"MessageController@store");