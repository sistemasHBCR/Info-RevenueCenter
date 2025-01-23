<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [MainController::class, 'home2'])->name('home2');
Route::get('/home2', [MainController::class, 'home2'])->name('home2');

Route::get('change_language', [MainController::class, 'change_language'])->name('change_language');