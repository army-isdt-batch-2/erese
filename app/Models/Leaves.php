<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaves extends Model
{
    protected $table = "loans";
    
    protected $fillable = [
        'employees_id',
        'leaves_type',
        'start',
        'end',
        'notes',
       
        
    ];
}
