<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Image;

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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('lien-he', 'HomeController@contact')->name('contact');
Route::get('gioi-thieu/{post}','PostController@show')->name('gioithieu');
Route::get('dao-tao/{post}','PostController@show')->name('daotao');
Route::get('hoc-vien-can-biet/{post}','PostController@show')->name('hvcb');
Route::get('tin-tuc/{post}','PostController@show')->name('news');
Route::get('thong-bao/{post}','PostController@show')->name('anouncement');
Route::post('tim-kiem', 'SearchController@search')->name('search');
Route::get('tim-kiem/{keyword}', 'SearchController@result')->name('result');
Route::get('doi-ngu-can-bo','StaffController@index')->name('staff');

Route::post('tvts', 'ContactController@tvts')->name('tvts');
Route::post('lien-he','ContactController@contact')->name('contact');

Route::resource('posts','PostController');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/','AdminController@dashboard')->name('dashboard');
    Route::prefix('users')->name('users.')->group(function() {
        Route::get('datatable','UserController@getDatatable')->name('datatable');
        Route::any('/{user}/publish','UserController@publish')->name('publish');
    });

    Route::prefix('groups')->name('groups.')->group(function() {
        Route::get('datatable','GroupController@getDatatable')->name('datatable');
    });

    Route::prefix('permissions')->name('permissions.')->group(function() {
        Route::get('datatable','PermissionController@getDatatable')->name('datatable');
    });

    Route::prefix('productcategories')->name('productcategories.')->group(function() {
        Route::get('datatable','ProductCategoryController@getDatatable')->name('datatable');
        Route::any('/{category}/publish','ProductCategoryController@publish')->name('publish');
    });

    Route::prefix('categories')->name('categories.')->group(function() {
        Route::get('datatable','CategoryController@getDatatable')->name('datatable');
        Route::any('/{category}/publish','CategoryController@publish')->name('publish');
    });

    Route::prefix('posts')->name('posts.')->group(function() {
        Route::get('datatable','PostController@getDatatable')->name('datatable');
        Route::any('/{post}/publish','PostController@publish')->name('publish');
    });

    Route::prefix('products')->name('products.')->group(function() {
        Route::get('datatable','ProductController@getDatatable')->name('datatable');
        Route::any('/{post}/publish','ProductController@publish')->name('publish');
    });

    Route::prefix('menucategories')->name('menucategories.')->group(function() {
        Route::get('datatable','MenuCategoryController@getDatatable')->name('datatable');
        Route::any('/{post}/publish','MenuCategoryController@publish')->name('publish');
    });

    Route::prefix('partners')->name('partners.')->group(function() {
        Route::get('datatable','PartnerController@getDatatable')->name('datatable');
        Route::any('/{partner}/publish','PartnerController@publish')->name('publish');
    });

    Route::prefix('students')->name('students.')->group(function() {
        Route::get('datatable','StudentController@getDatatable')->name('datatable');
        Route::get('diploma','StudentController@index')->name('diploma');
        Route::get('score','StudentController@index')->name('score');
        Route::any('/{student}/publish','StudentController@publish')->name('publish');
    });
    
    // Resource shoud be placed behind static
    Route::resource('users','UserController');    
    Route::resource('groups','GroupController');    
    Route::resource('permissions','PermissionController');        
    Route::resource('productcategories','ProductCategoryController');        
    Route::resource('categories','CategoryController');        
    Route::resource('posts','PostController');        
    Route::resource('products','ProductController');        
    Route::resource('menucategories','MenuCategoryController');        
    Route::resource('partners','PartnerController');        
    Route::resource('students','StudentController');        
});


