<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao','qtd', 'imagem'];

    public function getMaterials(string|null $search = null)
    {
       $materials = $this->where(function ($query) use ($search){
            if ($search){
                $query->where('nome', $search);                
            }
        })->get();    

        return $materials;
    }

    /*public function User()
    {
        return $this->BelongsTo(User::class);
    }*/
        
    //liga o modelo a muitos para muitos
    public function loans()
    {
        return $this->belongsToMany(User::class);
    }
}
