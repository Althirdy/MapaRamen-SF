<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Auth/Login')->middleware('guest')->name('login');
