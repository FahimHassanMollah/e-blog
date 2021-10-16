<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonController;
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






Route::get('/', [HomeController::class,'index'])->name('blog.index');
Route::get('/single', [HomeController::class,'show'])->name('blog.single');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/contact',  [HomeController::class,'contact'])->name('contact');


Route::get('/person',  [PersonController::class,'index'])->name('person');
