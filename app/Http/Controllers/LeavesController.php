<?php

namespace App\Http\Controllers;
use App\Models\Leaves;

use Illuminate\Http\Request;

class LeavesController extends Controller
{
    public function index()
    {
        return view('index')->with([
            'data' => Leaves::all()
        ]);
    }
}
