<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    
    protected $table = "employees";
    
    protected $fillable = [
        'photo',
        'employees_id',
        'first_name',
        'last_name',
        'middle_name',
        'contact',
        'birthday',
        'gender',
        'department_id',
        'designation',
        'basic_rate_perday',
        'sss',
        'philhealth',
        'pagibig',
        'tax',
        
    ];
}
