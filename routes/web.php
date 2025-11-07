<?php

use App\Http\Controllers\ServicePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/{servicePage:slug}', [ServicePageController::class, 'show'])
    ->name('servicepages.show');