<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    // How to 1 array
    // return view('home', [
    //     'name' => 'Narongsak',
    //     'lastname' => 'Pumpasert'
    // ]);

    // how to 2 with
    // return view('home')->with('name','Phoom')->with('lastname','N');

    // how to 3 compact
    $data = [
        'name' => 'Narongsak',
        'lastname' => 'Pumpasert'
    ];
    return view('home', compact('data'));
});

Route::get('/home2', function () {
    return view('home2');
});
