<?php

use Illuminate\Support\Facades\Route;
use Mushahedur\Contact\Http\Controllers\ContactController;


Route::middleware('web')->group(function () {
    Route::get('/contact', [ContactController::class, 'index'])
        ->name('contact.index');

    Route::post('/contact', [ContactController::class, 'store'])
        ->name('contact.store');
});