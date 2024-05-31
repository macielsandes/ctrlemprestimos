@extends('Layouts.default')

@section('title', 'Clientes')

@section('content')
    <div class="container-fluid border p-3 mt-10">
        <div class="container-fluid bg-light border p-4 rounded text-center">
            <h1>Listagem de clientes</h1>
        </div>
    </div>

    <div class="row p-3 d-flex bd-highlight">   
        <!--Botao para cadastro de novo cliente-->
        <div class="col">
            <a class="btn btn-primary" href="{{ route('customers.create') }}" role="button">Novo cliente</a>
        </div>

        <!--Div da barra de pesquisa-->
        <div class="col">
            <form class=" d-flex ms-auto p-2 bd-highlight" action="{{ route('users.index') }}" method="get">
                <input class="form-control me-2" type="search" name ="search" placeholder="Pesquisar"
                    aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </div>
    </div>

        
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">        
            <thead class="table-dark table-striped">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome Completo</th>
                    <th scope="col">Usuário</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td> {{ $customer->id }}</td>
                        <td> {{ $customer->firstname }} {{ $customer->lastname }}</td>
                        <td> {{ $customer->username }}</td>
                        <td> {{ $customer->email }}</td>
                        <td>
                            <a class="btn btn-danger" href="{{ route('customers.show', $customer->id) }}"
                                role="button">Remover</a>
                            <a class="btn btn-primary" href="{{ route('customers.edit', $customer->id) }}"
                                role="button">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
