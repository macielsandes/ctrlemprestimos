<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    //Model para buscar informações no banco de dados
    protected $fillable = [
        'name', 
        'description',
        'qty',
        'image',
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
    
    public function loanMaterials()
    {
        return $this->hasMany(Material::class);
    }   
   
   
}
