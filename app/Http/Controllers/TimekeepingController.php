<?php

namespace App\Http\Controllers;
use App\Models\Timekeeping;

use Illuminate\Http\Request;

class TimekeepingController extends Controller
{
     public function index()
    {
        return view('index')->with([
            'data' => Timekeeping::all()
        ]);
    }

}
