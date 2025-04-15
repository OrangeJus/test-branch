<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return "Hallo";
});

Route::get('/login', function () {
    return "Login guyss";
});