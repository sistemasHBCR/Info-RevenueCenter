<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('1homes', [MainController::class, 'homes'])->name('home2');
Route::get('admin', [MainController::class, 'administrate'])->name('admin');
Route::get('hacienda', [MainController::class, 'hacienda'])->name('hacienda');
Route::get('spa', [MainController::class, 'spa'])->name('spa');

Route::get('1homes-happenings', [MainController::class, 'homes_happenings'])->name('homes_happenings');
Route::get('1homes-wellness', [MainController::class, 'homes_wellness'])->name('homes_wellness');
Route::get('1homes-activities', [MainController::class, 'homes_activities'])->name('homes_activities');
Route::get('1homes-more', [MainController::class, 'homes_more'])->name('homes_more');

Route::get('hacienda-wellness', [MainController::class, 'hacienda_wellness'])->name('hacienda_wellness');
Route::get('hacienda-activities', [MainController::class, 'hacienda_activities'])->name('hacienda_activities');

Route::get('get_sites', [MainController::class, 'get_sites'])->name('get_sites');
Route::get('get_happ', [MainController::class, 'get_happ'])->name('get_happ');

Route::get('pdf/{filename}', [MainController::class, 'verPDF'])->name('verpdf');