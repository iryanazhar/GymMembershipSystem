<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\MemberController;

// classes routes
Route::resource('classes', ClassController::class);
Route::get('classes', [ClassController::class, 'index'])->name('classes.index');

// trainers routes
Route::resource('trainers', TrainerController::class);
Route::get('trainers', [TrainerController::class, 'index'])->name('trainers.index');

// main page route
Route::get('/', function () {
    return view('mainpage');
});

// package route
Route::get('/package', function () {
    return view('package');

});

// members route
//Route::get('/members', function () {
    //return view('members');
//});//
Route::resource('members', MemberController::class);
Route::get('/members', [MemberController::class, 'index'])->name('members.index');

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


