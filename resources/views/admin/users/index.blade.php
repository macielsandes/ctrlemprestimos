@extends('admin.layouts.default')

@section('title', 'Usuários')

@section('content')
    <div class="container-fluid p-3 border mt-10">
        <div class="row container-fluid bg-light border p-4 rounded">
            <div class="col">
                <h1>Usuários</h1>
            </div>
        </div>
    </div>

    <div class="row p-3 d-flex bd-highlight">
        <!--Botao para cadastro de novo usuario-->
        <div class="col-6">
            <a class="btn btn-primary" href="{{ route('users.create') }}" role="button">Novo Usuário</a>
        </div>
        <!--Div da barra de pesquisa-->
        <div class="col-6">
            <form class="d-flex ms-auto p-2 bd-highlight" action="{{ route('users.index') }}" method="GET">
                <input class="form-control" type="text" id="search" name="search"
                    placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="row">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">username</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td> {{ $user->id }}</td>
                        <td> {{ $user->firstname }}</td>
                        <td> {{ $user->username }}</td>
                        <td> {{ $user->email }}</td>
                        <td> </td>
                        <td>
                            <a class="btn btn-danger" href="{{ route('users.show', $user->id) }}" role="button">Remover</a>
                            <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}" role="button">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="container mt-6">
            <ul class="pagination  justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Próxima</a></li>
            </ul>
        </div>
    </div>
@endsection
