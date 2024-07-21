<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin.welcome');
});

Route::get('/', function () {
    return view('general.index');
});
