<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});
