<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing.index')->name('index');
Route::view('/about', 'landing.about')->name('about');
// Route::post();
// Route::get();
// Route::put();
// Route::patch();
// Route::delete();

