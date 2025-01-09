<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('mainpage');
});
Route::get('/package', function () {
    return view('package');
});
Route::get('/classes', function () {
    return view('classes');
});
Route::get('/members', function () {
    return view('members');
});
Route::get('/trainers', function () {
    return view('trainers');
});
Route::get('/products', function () {
    return view('products');
});

Route::resource('products',ProductController::class);
Route::get('/products/list', function () {
    return view('products.list');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
