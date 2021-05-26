<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loans extends Model
{
    protected $table = "loans";
    
    protected $fillable = [
        'employees_id',
        'full_name',
        'designation',
        'loans_type',
        'loan_amount',
        'months_payable',
        'notes',
        
    ];
}
