<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
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

Route::get('/',[HomeController::class, 'index'])->name('index');
Route::match(['GET', 'POST'], '/', [HomeController::class, 'index'])->name('index');

// Book
Route::get('/list_book',[BookController::class, 'list_book'])->name('list_book');
Route::post('/list_book',[BookController::class, 'list_book'])->name('search_book');
Route::match(['GET', 'POST'], '/add/book', [BookController::class, 'add'])->name('add_book');

// category
Route::get('/list_category',[CategoryController::class, 'list_category'])->name('list_category');
Route::post('/list_category',[CategoryController::class, 'list_category'])->name('search_category');
Route::match(['GET', 'POST'], '/add/category', [CategoryController::class, 'add'])->name('add_category');
Route::match(['GET', 'POST'], '/edit/category/{id}', [CategoryController::class, 'edit'])->name('edit_category');
Route::get('/delete/category/{id}',[CategoryController::class, 'delete'])->name('delete_category');

// user
Route::get('/list_user',[UserController::class, 'list_user'])->name('list_user');
Route::post('/list_user',[UserController::class, 'list_user'])->name('search_user');
Route::match(['GET', 'POST'], '/add/user', [UserController::class, 'add'])->name('add_user');
Route::match(['GET', 'POST'], '/edit/user/{id}', [UserController::class, 'edit'])->name('edit_user');
Route::get('/delete/user/{id}',[UserController::class, 'delete'])->name('delete_user');

// promotion
Route::get('/list_promotion',[PromotionController::class, 'list_promotion'])->name('list_promotion');
Route::post('/list_promotion',[PromotionController::class, 'list_promotion'])->name('search_promotion');
Route::match(['GET', 'POST'], '/add/promotion', [PromotionController::class, 'add'])->name('add_promotion');
Route::match(['GET', 'POST'], '/edit/promotion/{id}', [PromotionController::class, 'edit'])->name('edit_promotion');
Route::get('/delete/promotion/{id}',[PromotionController::class, 'delete'])->name('delete_promotion');

// review
Route::get('/list_review',[ReviewController::class, 'list_review'])->name('list_review');
Route::get('/delete/review/{id}',[ReviewController::class, 'delete'])->name('delete_review');

// detail
Route::get('/detail/{id}',[HomeController::class, 'detail'])->name('detail');

Route::match(['GET', 'POST'], 'cart{categoryId}', [HomeController::class, 'product_cate'])->name('product_cate');

Route::get('/category_list',[HomeController::class, 'category_list'])->name('category_list');
//cart
Route::match(['GET', 'POST'], 'cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/delete_cart/{rowID}',[HomeController::class, 'delete_cart'])->name('delete_cart');

// login
Route::match(['GET', 'POST'], 'login', [LoginController::class, 'login'])->name('login');
Route::match(['GET', 'POST'], 'register', [LoginController::class, 'register'])->name('register');