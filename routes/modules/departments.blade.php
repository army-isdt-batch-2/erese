<?php

use Illuminate\Support\Facades\Route;

Route::get('/departments', [
    App\Http\Controllers\DepartmentsController::class,
    'index'
])->name('departments');

Route::get('/departments/create', [
    App\Http\Controllers\DepartmentsController::class,
    'create'
])->name('departments.create');

Route::post('/departments/create/save', [
    App\Http\Controllers\DepartmentsController::class,
    'create_save'
])->name('departments.create.save');

