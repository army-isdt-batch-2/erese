<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "deparments";
    
    protected $fillable = [
        'department',
        
    ];
}
