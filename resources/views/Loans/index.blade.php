@extends('Layouts.default')

@section('title', 'Empréstimos')

@section('content')
    <div class="container border p-3 mt-10">
        <div class="container-fluid bg-light border p-4 rounded text-center">
            <h1>Materiais disponíveis para empréstimo</h1>
        </div>
    </div>
    <div class="container-fluid mt-3">
        <div class="row ">
            <!--Botao de emprestimo -->
            <div class="col">
                <a class="btn btn-primary" href="{{ route('loans.create') }}" role="button">Novo Empréstimo</a>
            </div>

        <!--Div da barra de pesquisa-->
        <div class="col">
            <form class="d-flex ms-auto p-2 bd-highlight" action="" method="get">
                <input type="text" id="search" name ="search" class="form-control" placeholder="Pesquisar material">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
        </div>
    </div>

    <!--Inicio da Tabela-->
    <div class=" p-3 table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Material</th>                    
                    <th scope="col">Status</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>

            @foreach ($loans as $loan)
                <tr>
                    <td> {{ $loan->id }} </td>
                    <td> {{ $loan->material->name }} </td>                   
                    <td> </td>
                    <td> 
                        <a class="btn btn-primary" href="{{ route('loans.edit', $loan->material_id) }}" 
                            role="button">Registrar Empréstimo
                        </a>
                    </td>
                </tr>
            @endforeach
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
