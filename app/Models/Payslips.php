<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payslips extends Model
{
    protected $table = "payslips";
    
    protected $fillable = [
        'payslip_id',
        'cutoff_end',
        'cutoff_start',
    ];
}
