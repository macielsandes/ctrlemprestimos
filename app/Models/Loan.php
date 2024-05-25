<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

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
