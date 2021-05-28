<?php

use Illuminate\Support\Facades\Route;

Route::get('/loans', [
    App\Http\Controllers\LoansController::class,
    'index'
])->name('loans');

Route::get('/loans/create', [
    App\Http\Controllers\LoansController::class,
    'loans_create'
])->name('loans.create');

Route::post('/loans/create/save', [
    App\Http\Controllers\LaonsController::class,
    'createe_save'
]);
