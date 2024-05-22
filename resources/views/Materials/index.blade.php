@extends('Layouts.default')

@section('title', 'Material')

@section('content')

    <div class="container text-center">
        <h2>Material</h2>
    </div>

    <!-- Container para o botão e barra de pesquisa-->
    <div class="container-fluid">
        <div class="row">
            <!--Botao para cadastro de novo usuario-->
            <div class="col">
                <a class="btn btn-primary" href="{{ route('materials.create') }}" role="button">Novo Material</a>
            </div>

            <!--Div da barra de pesquisa-->
            <div class="col">
                <form class=" d-flex ms-auto p-2 bd-highlight" action="{{ route('materials.index') }}" method="get">
                    <input class="form-control me-2" type="search" name ="search" placeholder="Pesquisar"
                        aria-label="Pesquisar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </div>

    <!--Inicio da Tabela-->
    <div class=" container-fluid table-responsive">
        <table class="table table-bordered">
            <caption>Materiais</caption>
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Imagem</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materials as $material)
                    <tr>
                        <td> {{ $material->id }} </td>
                        <td> {{ $material->nome }} </td>
                        <td> {{ $material->descricao }} </td>
                        <td>{{ $material->qty }} </td>
                        <td>{{ $material->image }} </td>
                        <td> <a href="{{ route('materials.edit', $material->id) }}">Editar></a> </td>
                        <td> <a href="{{ route('materials.show', $material->id) }}">Detalhes></a> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
