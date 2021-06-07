<?php

use Illuminate\Support\Facades\Route;

Route::get('/timekeeping', [
    App\Http\Controllers\TimekeepingController::class,
    'timekeeping'
])->name('timekeeping');

Route::get('/timekeeping/create', [
    App\Http\Controllers\TimekeepingController::class,
    'timekeeping_create'
])->name('timekeeping.create');

Route::post('/timekeeping/create/save', [
    App\Http\Controllers\TimekeepingController::class,
    'create_save'
]));