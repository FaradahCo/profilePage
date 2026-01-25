<?php

use Illuminate\Support\Facades\Route;

// الصفحة الرئيسية - روابط مباشرة
Route::get('/', function () {
    return view('direct');
});

// صفحة iframe
Route::get('/i', function () {
    return view('welcome');
});
