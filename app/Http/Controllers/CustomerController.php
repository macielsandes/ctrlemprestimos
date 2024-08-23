<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $model;

    // Construtor da classe
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

        return view ('admin.customers.index', compact ('customers'));
    }

    //controle para mostrar usuario
    public function show($id)
    {
        if(!$customer= Customer::find($id))
           return redirect() -> route('admin.customers.index');

        //se for passado um ID de um material valido, direciona para a tela de edição de usuario
        return view('admin.customers.show', compact('customer'));
    }

    //
    public function create()
    {
       return view('admin.customers.create');
    }

    //Recebendo dados do formulario
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer ['status']= 1;

        //Persiste os dados
        $customer->create($request->all());

        return redirect()-> route ('customers.index');
    }

    //Editando um usuário
    public function edit($id)
    {
        if (!$customer= Customer::find($id))
           return redirect() -> route('customers.index');

        return view('admin.customers.edit', compact('customer'));
    }

    //Excluir usuario do dando de dados
    public function destroy($id)
    {
        if(!$user= Customer::find($id))
           return redirect() -> route('admin.customers.index');

        $user->delete();

        return redirect() -> route('admin.customers.index');
    }
}
