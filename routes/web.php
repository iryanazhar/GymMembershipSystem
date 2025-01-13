<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PackageController;

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

Route::get('/packages', [PackageController::class, 'index'])->name('packages.index');

// Create route (show form to create a new package)
Route::get('/packages/create', [PackageController::class, 'create'])->name('packages.create');

// Store route (save a new package to the database)
Route::post('/packages', [PackageController::class, 'store'])->name('packages.store');

// Show route (display a specific package)
Route::get('/packages/{package}', [PackageController::class, 'show'])->name('packages.show');

// Edit route (show form to edit a specific package)
Route::get('/packages/{package}/edit', [PackageController::class, 'edit'])->name('packages.edit');

// Update route (update a specific package in the database)
Route::put('/packages/{package}', [PackageController::class, 'update'])->name('packages.update');

// Destroy route (delete a specific package)
Route::delete('/packages/{package}', [PackageController::class, 'destroy'])->name('packages.destroy');

// package route
// Route::get('/package', function () {
//     return view('package');

// });

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


