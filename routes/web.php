<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [MainController::class, 'homes'])->name('home2');
Route::get('admin', [MainController::class, 'administrate'])->name('admin');
Route::get('hacienda', [MainController::class, 'hacienda'])->name('hacienda');
Route::get('spa', [MainController::class, 'spa'])->name('spa');

Route::get('get_sites', [MainController::class, 'get_sites'])->name('get_sites');

Route::get('pdf/{filename}', [MainController::class, 'verPDF'])->name('verpdf');