<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/cadastro', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/options', function () {
    return view('options');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});
