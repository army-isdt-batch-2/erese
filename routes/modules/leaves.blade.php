<?php

use Illuminate\Support\Facades\Route;

Route::get('/leaves', [
    App\Http\Controllers\LeavesController::class,
    'index'
])->name('leaves');

Route::get('/leaves/create', [
    App\Http\Controllers\LeavesController::class,
    'leaves_create'
])->name('leaves.create');

Route::get('/leaves/create/save', [
    App\Http\Controllers\LeavesController::class,
    'create_save'
])->name('leaves.create.save');