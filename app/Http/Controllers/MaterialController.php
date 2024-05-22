<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Customer;
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

    // construtor
   public function __construct(Material $material)
   {
       $this->model = $material;
   }    
    
   //Controle que direciona para pagina inicial de material
    public function index(Request $request)
    {      
        $materials = $this->model
        ->getMaterials(
            search: $request ->search ?? ''
        );

        return view ('materials.index', compact('materials'));       
    }

     //controle para mostrar material
     public function show($id)
     {
         //$user = User::where ('id',$id) ->first();
         if(!$material= Material::find($id))
            return redirect() -> route('materials.index');
 
         //se for passado um ID de um material valido, direciona para a tela de edição de usuario
         return view('materials.show', compact('material'));
     }     
    
    //Controle para a edição de material
    public function create()
    {
       return view('materials.create');    
    }  

    //Enviando dados cadastrados para o banco de dados
    public function store(Request $request)
    {
        $material = new Material();
        
        $material->create($request->all());

        return redirect()-> route ('materials.index');
    
    }

     //Editando um usuário
    public function edit($id)
      {
          if (!$user= Material::find($id))
             return redirect() -> route('materials.index');
  
          return view('materials.edit', compact('materials'));
      }

      //Atualizando os registros de um usuario
    /*public function update(Request $request, $id)
    {
        if(!$user = Material::find($id))
           return redirect()-> route('materials.index');
        
        $data = $request->only('name', 'email');
        if ($request->password)
            $data['password'] = bcrypt($request->password);
        
        $user->update($data);

        return redirect() -> route('users.index');
    } */

    //Excluir usuario do dando de dados
    public function destroy($id)
    {
        if(!$user= Material::find($id))
           return redirect() -> route('materials.index');
        
        $user->delete();

        return redirect() -> route('materials.index');
    }
   
}
