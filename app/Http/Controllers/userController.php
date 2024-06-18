<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUsersFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $model;

    // criando um construtor
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    //Função responsavel por direcionar a tela inicial
    public function index(Request $request)
    {
        //$users = User::paginate(15);       
        
        $users = $this->model
                ->getUsers(
                    search: $request ->search ?? ''
                );

       return view ('users.index', compact('users'));
    }
    
    //Funcao de editar um determinado usuário
    public function show($id)
    {       
        if(!$user= User::find($id))
           return redirect() -> route('users.index');

        //se for passado um ID de um material valido, direciona para a tela de edição de usuario
        return view('users.show', compact('user'));
    }
    
    //Função que direcionar a pagina de criação de usuario
    public function create()
    {
       return view('users.create'); 
    }
    
    /** 
     * Função responsavel por receber as informações do formulario 
     * e realizar o cadastro no banco de dados
    */
    
    public function store(StoreUpdateUsersFormRequest $request)
    {   
        //Recebendo todos dados do formulario, porem uma verificação propria de criptografa no campo senha
        $data = $request->all(); 
        $data['password'] = bcrypt($request->password);
        
        User::create($data);
        return redirect()-> route('users.index')->with('msg', 'Usuário cadastrado com sucesso!'); 
    }

    //Editando um usuário
    public function edit($id)
    {
        if (!$user= User::find($id))
           return redirect() -> route('users.index');

        return view('users.edit', compact('user'));
    }

    //Atualizando os registros de um usuario
    public function update(StoreUpdateUsersFormRequest $request, $id)
    {
        if(!$user = User::find($id))
           return redirect()-> route('users.index');
        
        $data = $request->only('name', 'email');
        if ($request->password)
            $data['password'] = bcrypt($request->password);
        
        $user->update($data);

        return redirect() -> route('users.index');
    }
    
    //Excluir usuario do dando de dados
    public function destroy($id)
    {
        if(!$user= User::find($id))
           return redirect() -> route('users.index');
        
        $user->delete();

        return redirect() -> route('users.index');
    }
}
