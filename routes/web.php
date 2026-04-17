<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return 'Hello World';
})->name('home');

Route::get('/shop', function(){
    return 'Page Shop';
});

Route::get('/about', function(){
    return 'Page About';
});

Route::get('/contact', function(){
    return 'Page Contact';
});

Route::post('/post', function(){
    echo 'Method post';
});

Route::put('/put', function(){
    return 'Method put';
});

Route::prefix('admin')->group(function(){
    Route::get('posts/{post}/comments/{comment}', function($postId, $commentId){
    return "postId: $postId - commentId: $commentId";
});

Route::get('user/{name?}', function($name = 'John'){
    return $name;
});
});
