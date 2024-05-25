<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'fistname', 'lastname','username','email',
    ];

    // modelo da classe Customer
    public function getCustomers(string|null $search = null)
    {
       $customer = $this->where(function ($query) use ($search){
            if ($search){
                $query->where('username', $search);
                $query->orwhere('name', 'LIKE', "%{$search}%");
            }
        })->get();  
        
        return $customer;
    }

    public function loan()
    {
        return $this->hasMany(loan::class);
    }   

    
}
