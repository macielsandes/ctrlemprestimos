@extends('Layouts.default')

@section('title', 'Material')

@section('content')

  <!--Remover esta DIV e deixar apenas o yield-->
  <div class="container-fluid">
    <div class="row">
        @if (session('msg'))
            <p class="msg alert alert-success"> {{ session('msg') }}</p>
        @endif   
        <p class="msg alert alert-success">Erro </p>
        <div>
    </div>   


<div class="container-fluid border p-3 mt-10">
        <div class="container-fluid bg-light border p-4 rounded text-center">
            <h1>Listagem de Materiais</h1>
        </div>
    </div>

    <!-- Container para o botão e barra de pesquisa-->
    <div class="container-fluid p-3">
        <div class="row">
            <!--Botao para cadastro de novo usuario-->
            <div class="col">
                <a class="btn btn-primary" href="{{ route('materials.create') }}" role="button">Novo Material</a>
            </div>

            <!--Div da barra de pesquisa-->
            <div class="col">
                <form class="d-flex ms-auto p-2 bd-highlight" action="{{ route('materials.index') }}" method="get">
                    <input class="form-control me-2" type="search" name ="search" placeholder="Pesquisar"
                        aria-label="Pesquisar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </div>

    <!--Inicio da Tabela-->
    <div class="p-3 table-responsive">
        <table class="table table-bordered">        
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">foto</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>                    
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materials as $material)
                    <tr>
                        <th scope="row">{{ $material->id }}</th>
                        <td><img src="img/materials/{{$material->image }}" class="img-responsive" 
                            style="max-height:50px; max-width:50px" alt="" srcset=""> 
                        </td>
                        <td> {{ $material->name }} </td>
                        <td> {{ $material->description }} </td>
                        
                        <td><a class="btn btn-danger" href="{{ route('materials.edit', $material->id) }}">Editar</a> 
                            <a class="btn btn-primary" href="{{ route('materials.show', $material->id) }}">Remover</a> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="container mt-6">
        <ul class="pagination  justify-content-center">
            <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Próxima</a></li>
        </ul>
    </div>

@endsection
