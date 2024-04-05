<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    //Model para buscar informações no banco de dados
    protected $fillable = [
        'nome', 
        'descricao',
        'qtd', 
        'imagem',
    ];

    public function getMaterials(string|null $search = null)
    {
       $materials = $this->where(function ($query) use ($search){
            if ($search){
                $query->where('nome', $search);                
            }
        })->get();    

        return $materials;
    }

    //liga o modelo a muitos para muitos
    public function MaterialLoans()
    {
        return $this->belongsToMany(Customer::class);
    }
}
