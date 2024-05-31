@extends('Layouts.default')

@section('title', 'Listagem dos Usuários')

@section('content')

<div class="container-fluid p-3 mt-10">
    <div class="container-fluid bg-light border p-4 rounded  text-center">
        <h1>Listagem de usuários</h1>
    </div>
</div>
    
<div class="row p-3 d-flex bd-highlight">        
        <!--Botao para cadastro de novo usuario-->
        <div class="col">
            <a class="btn btn-primary" href="{{ route('users.create') }}" role="button"> Novo Usuário</a>
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
            <table class="table table-bordered">
                <thead class="table-dark table-striped ">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Primeiro nome</th>
                        <th scope="col">Ultimo nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Perfil</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td> {{ $user->id }}</td>
                            <td> {{ $user->firstname }}</td>
                            <td> {{ $user->lastname }}</td>
                            <td> {{ $user->email }}</td>
                            <td></td>
                            <td>

                                <a class="btn btn-danger" href="{{ route('users.show', $user->id) }}"
                                    role="button">Remover</a>
                                <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}"
                                    role="button">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>        

        <div class="container mt-6">
            <ul class="pagination  justify-content-center">                
                <li class="page-item">
                    <a class="page-link" href="">
                    </a>
                </li>
                              
            </ul>
        </div>
    </div>    
    @endsection
