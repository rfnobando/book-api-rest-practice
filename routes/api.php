<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\v1\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource('v1/books', BookController::class)
    ->only(['index', 'show', 'destroy'])
    ->middleware('auth:sanctum');

Route::post('login', [LoginController::class, 'login']);