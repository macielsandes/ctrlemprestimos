<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $model;

    // criando um construtor
    public function __construct(Customer $customer)
    {
        $this->model = $customer;
    }    
    
    public function index(Request $request)
    {      
        $customers = $this->model
            ->getCustomers(
            search: $request ->search ?? ''
        );
        
        return view ('customers.index', compact ('customer'));       
    }

    //controle para mostrar usuario
    public function show($id)
    {       
        if(!$customer= Customer::find($id))
           return redirect() -> route('customers.index');

        //se for passado um ID de um material valido, direciona para a tela de edição de usuario
        return view('customers.show', compact('customer'));
    }
    
    public function create()
    {
       return view('customers.create'); 
    }
    
    //Recebendo dados do formulario
    public function store(Request $request)
    {                   
        $customer = new Customer();        
        
        $customer->create($request->all());
        
        return redirect()-> route ('customers.index');
    }

    //Editando um usuário
    public function edit($id)
    {
        if (!$customer= Customer::find($id))
           return redirect() -> route('customers.index');

        return view('customers.edit', compact('customer'));
    }
    
    //Excluir usuario do dando de dados
    public function destroy($id)
    {
        if(!$user= Customer::find($id))
           return redirect() -> route('customers.index');
        
        $user->delete();

        return redirect() -> route('customers.index');
    }
}
