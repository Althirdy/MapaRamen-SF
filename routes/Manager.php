<?php

use App\Http\Controllers\Manager\ManagerController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/manager', [ManagerController::class, 'index'])->name('manager');
    Route::get('/pos',[ManagerController::class,'pos'])->name('pos');
});


