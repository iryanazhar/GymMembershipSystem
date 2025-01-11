<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\TrainerController;

Route::resource('classes', ClassController::class);
Route::get('classes', [ClassController::class, 'index'])->name('classes.index');


Route::resource('trainers', TrainerController::class);
Route::get('trainers', [TrainerController::class, 'index'])->name('trainers.index');


Route::get('/', function () {
    return view('mainpage');
});
Route::get('/package', function () {
    return view('package');

});
Route::get('/members', function () {
    return view('members');
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
