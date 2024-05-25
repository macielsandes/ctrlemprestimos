@extends('Layouts.default')

@section('title', 'Clientes')

@section('content')
    <div class="container"> 
       <h2>Clientes</h2>
    </div>
    <!--Botao para cadastro de novo cliente-->
    <div class="col">
        <a class="btn btn-primary" href="{{ route('customers.create') }}" role="button">Novo cliente</a>
    </div>

    <div class="container">
    <table class="table table-bordered table-striped table-hover">
        <caption>Clientes</caption>
        <thead class="table-dark table-striped ">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Primeiro Nome</th>
                <th scope="col">último Nome</th>                
                <th scope="col">Usuário</th>
                <th scope="col">E-mail</th>           
            </tr>
        </thead>

        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td> {{ $customer->id }}</td>
                    <td> {{ $customer->firstname }}</td>
                    <td> {{ $customer->lastname }}</td>
                    <td> {{ $customer->username }}</td>
                    <td> {{ $customer->email }}</td>
                    <td> Vazio</td>
                    <td> Vazio</td>
                    <td>
                        <a class="btn btn-danger" href="{{ route('customers.show', $customer->id) }}"
                            role="button">Remover</a>
                        <a class="btn btn-primary" href="{{ route('customers.edit', $customer->id) }}"
                            role="button">Editar</a>                           
                    </td>
                    <td>                       
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection
