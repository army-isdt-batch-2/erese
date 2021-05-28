<?php

namespace App\Http\Controllers;
use App\Models\Payslips;

use Illuminate\Http\Request;

class PayslipsController extends Controller
{
     public function index()
    {
        return view('index')->with([
            'data' => Payslips::all()
        ]);
    }

}
