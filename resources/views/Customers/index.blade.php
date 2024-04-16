@extends('Layouts.default')

@section('title', 'Clientes')

@section('content')

    <h2>Clientes</h2>
    
    <!--Botao para cadastro de novo cliente-->
    <div class="col">
        <a class="btn btn-primary" href="{{ route('customers.create') }}" role="button">Novo cliente</a>
    </div>

    <table class="table table-bordered">
        <caption>Clientes</caption>
        <thead class="table-dark table-striped ">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Primeiro Nome</th>
                <th scope="col">Ultimo Nome</th>
                <th scope="col">username</th>
                <th scope="col">email</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
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
                        <a class="btn btn-primary" href="{{ route('customers.edit', $customer->id) }}"
                            role="button">Editar</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('customers.show', $customer->id) }}"
                            role="button">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection
