<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\BookController;
use App\Http\Controllers\Backend\CategoryController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/show/{id}', [HomeController::class, 'show'])->name('home.show');


Route::middleware(['auth','isAdmin'])->group( function () {
    Route::get('/dashboard', function () {
        return view('layouts.includes.index');
     });
    // Route Category
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
    // Route Books
    Route::get('/book', [BookController::class, 'index'])->name('book.index');
    Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
    Route::post('/book', [BookController::class, 'store'])->name('book.create');
    Route::get('/book/show/{id}',[BookController::class, 'show'])->name('book.show');
    Route::get('/book/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
    Route::put('/book/update/{id}', [BookController::class, 'update'])->name('book.update');
    Route::delete('/book/delete/{id}', [BookController::class, 'destroy'])->name('book.delete');
}); 