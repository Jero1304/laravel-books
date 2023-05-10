<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerBook;

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


Route::get('/',[ControllerBook::class,'index'])->name('books.index');
Route::get('/books',[ControllerBook::class,'index'])->name('books.index');

Route::get('/books/create',[ControllerBook::class,'create'])->name('books.create');
Route::get('/books/{book}',[ControllerBook::class,'show'])->name('books.show');
Route::post('/books',[ControllerBook::class,'store'])->name('books.store');
Route::get('/books/{book}/edit',[ControllerBook::class,'edit'])->name('books.edit');

Route::put('/books/{book}',[ControllerBook::class,'update'])->name('books.update');
Route::delete('/books/{book}',[ControllerBook::class,'destroy'])->name('books.destroy')->withTrashed();
Route::post('/books/{book}/restore', [ControllerBook::class, 'restore'])->name('books.restore')->withTrashed();


// Route::resource('books', ControllerBook::class)->withTrashed();

