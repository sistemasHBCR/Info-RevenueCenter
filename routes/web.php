<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [MainController::class, 'home2'])->name('home2');
Route::get('admin', [MainController::class, 'administrate'])->name('admin');
Route::get('spa', [MainController::class, 'spa'])->name('spa');

Route::get('change_language', [MainController::class, 'change_language'])->name('change_language');

Route::get('pdf/{filename}', [MainController::class, 'verPDF'])->name('verpdf');