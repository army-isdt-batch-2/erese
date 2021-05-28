<?php

namespace App\Http\Controllers;
use App\Models\Loans;

use Illuminate\Http\Request;

class LoansController extends Controller
{
     public function index()
    {
        return view('index')->with([
            'data' => Loans::all()
        ]);
    }
}
