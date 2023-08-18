<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\BlogController;
use App\Models\Category;
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

Route::get('/home', function () {
    return view('main_page/home');
})->name('home');

Route::get('/registration', [RegistrationController::class,'index'])->name('registration.index');
Route::post('/registration', [RegistrationController::class,'store'])->name('registration.store');
Route::get('/login', [LoginController::class,'index'])->name('login.index');
Route::post('/login', [LoginController::class,'login'])->name('login.auth');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::get('/', function(){
        return view('admin_page/admin');
    })->name('admin');
Route::get('/post', [PostController::class,'index'])->name('post.index');
Route::get('create', [PostController::class,'create'])->name('create');
Route::post('post/store', [PostController::class,'store'])->name('post.store');
Route::get('post/{id}/edit', [PostController::class,'edit'])->name('post.edit');
Route::post('post/{id}/update', [PostController::class,'update'])->name('post.update');
Route::get('post/{id}/delete', [PostController::class,'destroy'])->name('post.delete');
});
Route::get('/category', [CategoryController::class,'index'])->name('category.index');
Route::get('category/create', [CategoryController::class,'create'])->name('category.create');
Route::post('category/store', [CategoryController::class,'store'])->name('category.store');
Route::get('category/{id}/edit', [CategoryController::class,'edit'])->name('category.edit');
Route::post('category/{id}/update', [CategoryController::class,'update'])->name('category.update');
Route::get('category/{id}/delete', [CategoryController::class,'destroy'])->name('category.delete');
Route::get('/blog', [BlogController::class,'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class,'show'])->name('blog.show');

