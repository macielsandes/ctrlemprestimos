<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

/**
 * This class controls all actions related to material for
 * the CTRLEmprestimos application.
 *
 * @version    v1.0
 ** @author [Maciel Sandes] 
 */

class MaterialController extends Controller
{
    protected $model;

    // Construtor da classe 
   public function __construct(Material $material)
   {
       $this->model = $material;
   }    
    
   // função da pagina inicial
    public function index(Request $request)
    {
       return view ('materiais.index'); 
    }
     
    //controle para mostrar material
     public function show($id)
     {
         //$user = User::where ('id',$id) ->first();
         if(!$material= Material::find($id))
            return redirect() -> route('materiais.index');
 
         //se for passado um ID de um material valido, direciona para a tela de edição de usuario
         return view('materiais.show', compact('material'));
     }     
    
    //Controle para a edição de material
    public function create()
    {
       return view('materiais.create');    
     }  

    //Enviando dados cadastrados para o banco de dados
    public function store(Request $request)
    {
        $material = new Material();
        
        $material->create($request->all());

        return redirect()-> route ('materiais.index');
    
    }

     //Editando um usuário
    public function edit($id)
      {
          if (!$user= Material::find($id))
             return redirect() -> route('materiais.index');
  
          return view('materiais.edit', compact('material'));
      }
 
    //Excluir usuario do dando de dados
    public function destroy($id)
    {
        if(!$user= Material::find($id))
           return redirect() -> route('materiais.index');
        
        $user->delete();

        return redirect() -> route('materiais.index');
    }
}
