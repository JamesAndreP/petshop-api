<?php

use App\Http\Controllers\CatController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'index']);
Route::get('/hello/andre', [HelloController::class, 'andre']);

Route::get('/hi', [HiController::class, 'index']);
Route::get('/hi/zayin', [HiController::class, 'zayin']);

Route::get('/dog', [DogController::class, 'index']);

Route::get('/cat', [CatController::class, 'index']);
