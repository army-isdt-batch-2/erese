<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function table()
    {
        return view('table');
    }
    public function layout()
    {
        return view('layout');
    }
    public function departments()
    {
        return view('departments');
    }
    public function employees()
    {
        return view('employees');
    }
    public function loans()
    {
        return view('loans');
    }
    public function leaves()
    {
        return view('leaves');
    }
    public function deductions()
    {
        return view('deductions');
    }
    public function timekeeping()
    {
        return view('timekeeping');
    }
    public function payslips()
    {
        return view('payslips');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function form()
    {
        return view('form');
    }
    public function departments_create()
    {
        return view('create_form.departments');
    }
    public function employees_create()
    {
        return view('create_form.employees');
    }
    public function deductions_create()
    {
        return view('create_form.deductions');
    }
    public function dashboard_create()
    {
        return view('create_form.dashboard');
    }
    public function leaves_create()
    {
        return view('create_form.leaves');
    }
    public function loans_create()
    {
        return view('create_form.loans');
    }
    public function payslips_create()
    {
        return view('create_form.payslips');
    }
    public function timekeeping_create()
    {
        return view('create_form.timekeeping');
    }
    public function timekeepingview_create()
    {
        return view('create_form.timekeepingview');
    }
    public function payslipsview_create()
    {
        return view('create_form.payslipsview');
    }
}
