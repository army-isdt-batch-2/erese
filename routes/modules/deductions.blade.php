<?php

use Illuminate\Support\Facades\Route;
Route::get('/deductions', [
    App\Http\Controllers\DeductionsController::class,
    'deductions'
])->name('deductions');

Route::get('/deductions/create', [
    App\Http\Controllers\DeductionsController::class,
    'deductions_create'
])->name('deductions.create');

Route::post('/deductions/create/save', [
    App\Http\Controllers\DeductionsController::class,
    'create_save'
])->name('deductions.create.save');