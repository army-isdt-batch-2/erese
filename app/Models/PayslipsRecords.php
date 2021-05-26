<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayslipsRecords extends Model
{
    protected $table = "payslips_records";
    
    protected $fillable = [
        'employees_id',
        'payslip_id',
        'data',
       
    ];
}
