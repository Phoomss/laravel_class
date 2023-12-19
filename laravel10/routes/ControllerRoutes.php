<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

Route::get('/create', [HomeController::class, 'create'])
    ->name('create');

Route::get('/update/{id?}', [HomeController::class, 'update'])
    ->name('update');

Route::post('/stroe', [HomeController::class, 'stroe'])
    ->name('stroe');

Route::resource('post', PostController::class);
