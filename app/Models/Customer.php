<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname', 'lastname','username','email',
    ];

    public function getCustomers(string|null $search = null)
    {
       $customer = $this->where(function ($query) use ($search){
            if ($search){
                $query->where('username', $search);
                $query->orwhere('firstname', 'LIKE', "%{$search}%");
            }
        })->get();

        return $customer;
    }

    /**
     * The roles that belong to the loanusers.
     */
    public function Materials(): BelongsToMany
    {
        return $this->belongsToMany(Material::class);
    }


}
