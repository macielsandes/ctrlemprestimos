<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $table = 'materials';

    //Model para buscar informações no banco de dados
    protected $fillable = [
        'name', 'description', 'image', 'status',
    ];

    public function getMaterials(string|null $search = null)
    {
       $materials = $this->where(function ($query) use ($search){
            if ($search){
                $query->where('name', $search);                
            }
        })->get();    

        return $materials;
    }  
    
    // Relaciona o modelo para emprestar para um cliente
    public function loanCustomer()
    {
        return $this->belongsToMany(Customer::class);
    }     
    
   
   
}
