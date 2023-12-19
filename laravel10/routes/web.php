<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     // how to send data by associate array
//     /*   return view('home2',[
//         'id'=>'6530901',
//         'name'=>'Narongsak P.'
//     ]);
// */
//     // how to send by compact
//     // create value array
//     $valueds = [
//         'id' => '55368',
//         'product' => 'colacola',
//         'price' => '10',
//         'qty' => '5'
//     ];

//     return view('home2',compact('valueds'));
// });

// Route::get('/me', function () {
//     return view('/aboutme');
// });

// Route::get('/posts',[PostController::class,'index']);

Route::get('/',[HomeController::class,'index']);
Route::get('/aboute',[HomeController::class,'aboute']);

Route::get('/posts',[PostController::class,'index']);
