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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/aboutus',function(){
    return view('aboutus');
});

Route::get('/shopside',[App\Http\Controllers\shopController::class, 'shop'])->name('shopside');

Route::get('/contact',function(){
    return view('contact');
});


route::get('/add-post',[App\Http\Controllers\PostController::class, 'addPost'])->name('add-post');
route::post('/create-post',[App\Http\Controllers\PostController::class, 'createPost'])->name('post-create');
route::get('/posts',[App\Http\Controllers\PostController::class, 'getPost']);
route::get('/delete-post/{id}',[App\Http\Controllers\PostController::class, 'deletePost']);
//route::get('/edit-post/{id}',[App\Http\Controllers\PostController::class, 'editPost']);

