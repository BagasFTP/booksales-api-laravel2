<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;

// health check
Route::get('/ping', fn () => response()->json(['message' => 'API ready']));

// READ ALL
Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/genres',  [GenreController::class,  'index']);

// CREATE
Route::post('/authors', [AuthorController::class, 'store']);
Route::post('/genres',  [GenreController::class,  'store']);
