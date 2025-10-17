<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

Route::get('/ping', fn () => response()->json(['message' => 'API is alive']));

Route::get('/books',   [BookController::class, 'index']);
Route::get('/authors', [AuthorController::class, 'index']);
