<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return redirect()->to('gymlife-master/index.html');
});
Route::resource('products',ProductController::class);
Route::get('/products/list', function () {
    return view('products.list');
});
