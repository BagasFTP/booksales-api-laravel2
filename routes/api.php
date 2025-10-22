<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;
use App\Http\Middleware\EnsureUserIsAdmin; // ← tambahkan ini di atas

Route::post('login', [AuthController::class, 'login']);

// PUBLIC (tanpa login)
Route::get('ping', fn() => response()->json(['ok' => true]));
Route::apiResource('authors', AuthorController::class)->only(['index','show']);
Route::apiResource('genres',  GenreController::class)->only(['index','show']);

// ADMIN (login + admin)
Route::middleware(['auth:sanctum', EnsureUserIsAdmin::class])->group(function () {
    Route::apiResource('authors', AuthorController::class)->only(['store','update','destroy']);
    Route::apiResource('genres',  GenreController::class)->only(['store','update','destroy']);
});
