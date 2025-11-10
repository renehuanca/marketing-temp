<?php

use App\Http\Controllers\ServicePageController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/{servicePage:slug}', [ServicePageController::class, 'show'])
    ->name('service-pages.show');

Route::get('/service-pages/create', [ServicePageController::class, 'create'])
    ->name('servicepages.create');

Route::post('/service-pages', [ServicePageController::class, 'store'])
    ->name('service-pages.store');

Route::get('service-pages/{servicePage}/edit', [ServicePageController::class, 'edit'])
    ->name('service-pages.edit');

Route::put('service-pages/{servicePage}', [ServicePageController::class, 'update'])
    ->name('service-pages.update');

Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');
