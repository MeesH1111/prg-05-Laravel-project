<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Route::get('/about-us', function () {
//    $company = 'Hogeschool Rotterdam';
//    return view('about-us', [
//        'company' => $company
//    ]);
//})->name('about-us.hogeschool');

Route::get('/about-us', [\App\Http\Controllers\AboutUsController::class, 'index']);


Route::get('contact/{id?}', function(string $id='') {
    $id = '1';
    $message = 'Je contact gegevens';
    return view('contact', [
        'id' => $id,
        'message' => $message
    ]);
});

Route::resource('products', \App\Http\Controllers\ProductController::class);

Route::get('/welcome', function () {
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

require __DIR__.'/auth.php';
