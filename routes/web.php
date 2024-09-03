<?php

use Illuminate\Support\Facades\Route;

Route::post('/login', function () {
    return view('welcome');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});
