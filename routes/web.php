<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    $data = ['message' => 'Hello World dinamico!'];
    return view('home', $data);
});
