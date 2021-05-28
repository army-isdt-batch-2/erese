<?php

use Illuminate\Support\Facades\Route;

Route::get('/payslips', [
    App\Http\Controllers\PayslipsController::class,
    'index'
])->name('payslips');

Route::get('/payslips/create', [
    App\Http\Controllers\PayslipsController::class,
    'payslips_create'
])->name('payslips.create');

Route::post('/payslips/create/save', [
    App\Http\Controllers\PayslipsController::class,
    'create_save'
]);
