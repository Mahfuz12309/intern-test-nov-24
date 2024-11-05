<?php

use App\Http\Controllers\ImageController;

Route::get('/', function () {
    return redirect()->route('images.index');
});

Route::get('/images', [ImageController::class, 'index'])->name('images.index');
Route::post('/images/upload', [ImageController::class, 'upload'])->name('images.upload');
