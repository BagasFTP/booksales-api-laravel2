<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

Route::get('/', fn() => redirect('/books'));
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
