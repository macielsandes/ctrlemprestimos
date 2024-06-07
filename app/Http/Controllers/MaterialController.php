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

    // construtor
   public function __construct(Material $material)
   {
       $this->model = $material;
   }    
    
   // Pagina inicial e lista os dados cadastrados
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
         //opção 1 -> Permite buscar determinado ID de usuario
        //$user = User::where ('id',$id) ->first();
        
        //opção 2-> Procura um usuario e senão o entre direcionar para pagina inicial com todos os usuarios
        /* if(!$material= Material::find($id))
            return redirect() -> route('materials.index');*/

        //opção 3
        $material = Material::find($id);
         
         //se for passado um ID de um material valido, direciona para a tela de edição de usuario
         return view('materials.show', compact('material'));
     }     
    
    //Função que direcionar a pagina de criação de usuario
    public function create()
    {
       return view('materials.create');    
    }  

    // Salvando um material no banco de dados
    public function store(Request $request)
    {
        // uma das formas de se salvar dados no banco de dados
        //$material = new Material;        
        //$material->create($request->all());
        //$material->save();

        // segunda forma
        $material= new Material;
        
        $material->name = $request->name;
        $material->description = $request->description;

        //image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage= $request ->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName(). strtotime("now")). "." . $extension;            
            $requestImage->move(public_path('img/materials'), $imageName);
            $material->image =$imageName;
        }        
        
        $material->save();
        
        return redirect()-> route ('materials.index')->with('msg', 'Material cadastrado com sucesso!');        
    
    }

     //Editando um Material
    public function edit($id)
      {
          if (!$material= Material::find($id))
             return redirect()-> route('materials.index');
  
          return view('materials.edit', compact('material'));
      }

      //Atualizando os registros de um usuario
    public function update(Request $request, $id)
    {
        if(!$material = Material::find($id))
           return redirect()->route('materials.index');
        
        $data = $request->only('name', 'description', 'images');
                
        $material->update($data);

        return redirect() -> route('materials.index')->with('msg', 'Material atualizado com sucesso!');
    }

    //Excluindo Material do banco de dados
    public function destroy($id)
    {
        if(!$material= Material::findOrFail($id))
           return redirect() -> route('materials.index');
        
        $material->delete();

        return redirect()->route('materials.index');
    }
   
}
