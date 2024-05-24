<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan_Material extends Model
{
    use HasFactory;

    //Model para Loan_Material
    protected $fillable = [
        'customer_id', 
        'material_id',
        'status',
        'timestramps'
    ];

}
