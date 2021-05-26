<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimekeepingRecords extends Model
{
    protected $table = "timekeeping";
    
    protected $fillable = [
        ',employess_id',
        ',clockin',
        ',clockout',
        ',total',
        ',timekeeping_id',
       
    ];

}
