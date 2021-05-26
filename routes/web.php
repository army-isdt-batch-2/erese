<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', [
    App\Http\Controllers\LoginController::class,
    'index'
]);

Route::get('/table', [
    App\Http\Controllers\LoginController::class,
    'table'
]);

Route::get('/layout', [
    App\Http\Controllers\LoginController::class,
    'layout'
]);
Route::get('/employees', [
    App\Http\Controllers\LoginController::class,
    'employees'
])->name('employees');
Route::get('/loans', [
    App\Http\Controllers\LoginController::class,
    'loans'
])->name('loans');
Route::get('/departments', [
    App\Http\Controllers\LoginController::class,
    'departments'
])->name('departments');
Route::get('/leaves', [
    App\Http\Controllers\LoginController::class,
    'leaves'
])->name('leaves');
Route::get('/deductions', [
    App\Http\Controllers\LoginController::class,
    'deductions'
])->name('deductions');
Route::get('/timekeeping', [
    App\Http\Controllers\LoginController::class,
    'timekeeping'
])->name('timekeeping');
Route::get('/payslips', [
    App\Http\Controllers\LoginController::class,
    'payslips'
])->name('payslips');
Route::get('/dashboard', [
    App\Http\Controllers\LoginController::class,
    'dashboard'
])->name('dashboard');
Route::get('/form', [
    App\Http\Controllers\LoginController::class,
    'form'
])->name('form');
Route::get('/departments/create', [
    App\Http\Controllers\LoginController::class,
    'departments_create'
])->name('departments.create');
Route::get('/employees/create', [
    App\Http\Controllers\LoginController::class,
    'employees_create'
])->name('employees.create');
Route::get('/deductions/create', [
    App\Http\Controllers\LoginController::class,
    'deductions_create'
])->name('deductions.create');
Route::get('/dashboard/create', [
    App\Http\Controllers\LoginController::class,
    'dashboard_create'
])->name('dashboard.create');
Route::get('/leaves/create', [
    App\Http\Controllers\LoginController::class,
    'leaves_create'
])->name('leaves.create');
Route::get('/loans/create', [
    App\Http\Controllers\LoginController::class,
    'loans_create'
])->name('loans.create');
Route::get('/payslips/create', [
    App\Http\Controllers\LoginController::class,
    'payslips_create'
])->name('payslips.create');
Route::get('/timekeeping/create', [
    App\Http\Controllers\LoginController::class,
    'timekeeping_create'
])->name('timekeeping.create');
Route::get('/timekeepingview/create', [
    App\Http\Controllers\LoginController::class,
    'timekeepingview_create'
])->name('timekeepingview.create');
Route::get('/payslipsview/create', [
    App\Http\Controllers\LoginController::class,
    'payslipsview_create'
])->name('payslipsviews.create');



