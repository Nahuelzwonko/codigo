<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\VistaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'processForm'])->name('contact.store');
Route::get('/vista', [VistaController::class, 'Vista'])->name('vista');
Route::get('/communityManager', [VistaController::class, 'inicioCm'])->name('communityManager');
Route::get('/communityManager/communication', [VistaController::class, 'communication'])->name('communication');
Route::get('/communityManager/marketing', [VistaController::class, 'marketing'])->name('marketing');
Route::get('/communityManager/technology', [VistaController::class, 'technology'])->name('technology');