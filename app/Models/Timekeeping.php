<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timekeeping extends Model
{
    protected $table = "timekeeping";
    
    protected $fillable = [
        'date',
       
    ];
}
}
