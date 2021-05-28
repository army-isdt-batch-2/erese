<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departments;

use Redirect;

class DepartmentsController extends Controller
{
    protected $request;
    //declare varialble
    public function __construct(Request $request)
    {
        //make the request available on the class
        $this->request = $request;
    }
    public function departments()
    {
        
        return view('departments')->with([
            'data' => Departments::all()
        ]);
    }
    public function create_save()
    {
        Departments::create(
            $this->request->except('_token')

        );
        
        return Redirect::route('departments');
    }
}
