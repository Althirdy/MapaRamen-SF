<?php

use App\Http\Controllers\Manager\ManagerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::middleware('auth')->group(function () {
    Route::get('/manager', [ManagerController::class, 'index'])->name('manager');
    Route::get('/pos',[ManagerController::class,'pos'])->name('pos');
});

Route::get('/Ingredients', [ManagerController::class, 'ingredients'])->name('ingredients');
Route::get('/Meals', [ManagerController::class, 'meals'])->name('meals');
Route::get('/Procurement', [ManagerController::class, 'procurement'])->name('procurement');
Route::get('/Delivery', [ManagerController::class, 'delivery'])->name('delivery');
Route::get('/Return', [ManagerController::class, 'return'])->name('return');
