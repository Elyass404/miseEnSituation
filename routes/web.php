<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource("/articles", ArticleController:: class);
Route::resource("/categories", CategoryController:: class);