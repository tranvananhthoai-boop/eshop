<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CatesgoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderProductController;
use App\Http\Controllers\Product1Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/catesgory', [CatesgoryController::class, 'index'])->name('catesgory');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/product1', [Product1Controller::class, 'index'])->name('product1');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::get('/shop', function(){
    return 'Page Shop';
})->middleware('checkAge');

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

Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);
Route::resource('orderproducts', OrderProductController::class);

Route::get('/child', function(){
    return view('child');
});
