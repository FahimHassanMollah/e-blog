<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\UserController;
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



// person routes
Route::get('/person/create',  [PersonController::class,'create'])->name('person.create');

Route::get('/persons',  [PersonController::class,'show'])->name('person.show');

Route::post('/person/create',  [PersonController::class,'store'])->name('person.create');








// country routes

Route::get('/countries',[CountryController::class,'show'])->name('country.show');

Route::get('/countries/{id}/details',[CountryController::class,'details'])->name('country.details');

Route::get('/countries/{id}/edit', [CountryController::class, 'edit'])->name('country.edit');

Route::patch('/countries/{id}/edit', [CountryController::class, 'update'])->name('country.edit');

Route::get('/countries/create',[CountryController::class,'create'])->name('country.create');

Route::post('/countries/create',[CountryController::class,'store'])->name('country.store');

Route::delete('/countries/{id}/delete',[CountryController::class,'destroy'])->name('country.delete');




// user routes

Route::get('/users',[UserController::class,'index'])->name('users');
Route::get('/users/create',[UserController::class,'create'])->name('user.create');

Route::post('/users/create',[UserController::class,'store'])->name('user.create');



// profile

Route::get('/users',[UserController::class,'index'])->name('users');



// authors routes
Route::get('/authors/',[AuthorController::class,'index'])->name('author.index');
Route::get('/authors/create',[AuthorController::class,'create'])->name('author.create');
Route::post('/authors/create',[AuthorController::class,'store'])->name('author.store');


// books routes
Route::get('/books/',[BookController::class,'index'])->name('book.index');
Route::get('/books/edit/{id}',[BookController::class,'edit'])->name('book.edit');
Route::put('/books/edit/{id}',[BookController::class,'update'])->name('book.update');
Route::get('/books/create',[BookController::class,'create'])->name('book.create');
Route::post('/books/store',[BookController::class,'store'])->name('book.store');
