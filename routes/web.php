<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.home.index');
});


Route::get('/about', function () {
    return view('client.about.about');
});
