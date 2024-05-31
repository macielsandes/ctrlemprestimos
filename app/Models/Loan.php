<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'loandate', 'material_id', 'customer_id',  
    ];

    /**
     * The materials that belong to the Customers.
     * 
     */
    public function material()
    {
        return $this->belongsTo(Material::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
