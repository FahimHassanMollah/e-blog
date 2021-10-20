<?php

use App\Http\Controllers\CountryController;
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
