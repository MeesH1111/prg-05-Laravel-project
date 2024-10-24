<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Route::get('/about-us', function () {
//    $company = 'Hogeschool Rotterdam';
//    return view('about-us', [
//        'company' => $company
//    ]);
//})->name('about-us.hogeschool');

Route::get('/about-us', [\App\Http\Controllers\AboutUsController::class, 'index'])->name('about-us');
Route::get('/contact/{id?}', [\App\Http\Controllers\ContactController::class, 'index']);
Route::resource('products', \App\Http\Controllers\ProductController::class);
Route::get('products/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('products.create')->middleware('auth');
Route::get('products/search', [\App\Http\Controllers\ProductController::class, 'search'])->name('products.search')->middleware('auth');
Route::delete('products/destroy/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy')->middleware('auth');
Route::get('products/{id}', [\App\Http\Controllers\ProductController::class, 'update'])->name('products.update')->middleware('auth');
Route::resource('review', \App\Http\Controllers\ReviewController::class)->middleware('auth');

Route::resource('category', \App\Http\Controllers\CategoryController::class)->middleware('auth');
Route::get('category/create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('category.create')->middleware('auth');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});



require __DIR__.'/auth.php';
