@extends('Layouts.default')

@section('title', 'Empréstimos')

@section('content')
    <div class="container text-center">
        <h1>Materiais emprestados </h1>
    </div>

    <div class="container-fluid mt-3">
        <div class="row py-2">           
            <!--Botao de devolucao -->
            <div class="col-md-6">
                <a class="btn btn-primary" href="" role="button">Registrar Devolução </a>
            </div>
        </div>

        <!--Div da barra de pesquisa-->
        <div class="col-md-6">
            <form class=" d-flex ms-auto p-2 bd-highlight" action="" method="get">
                <input class="form-control me-2" type="search" name ="search" placeholder="Pesquisar"
                    aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </div>
    </div>
   
    <!--Inicio da Tabela-->
    <div class=" container-fluid table-responsive">
        <table class="table table-bordered">        
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materials as $material)
                    <tr>
                        <td> {{ $material->id }} </td>
                        <td> {{ $material->name }} </td>
                        <td> {{ $material->description }} </td>
                        <td>{{ $material->qty }} </td>
                        <td>{{ $material->image }} </td>
                        <td> <a class="btn btn-danger" href="{{ route('materials.edit', $material->id) }}">Editar</a> 
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
