@extends('Layouts.default')

@section('title', 'Empréstimos')

@section('content')
    <div class="container border p-3 mt-10">
        <div class="container-fluid bg-light border p-4 rounded text-center">
            <h1>Materiais emprestados</h1>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="row">           
            <!--Botao de devolucao -->
            <div class="col">
                <a class="btn btn-primary" href="{{ route('devolutions.create') }}" role="button">Registrar Devolução </a>
            </div>       

        <!--Div da barra de pesquisa-->
        <div class="col">
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
                    <th scope="col">Material</th>
                    <th scope="col">Usuário</th> 
                    <th scope="col">Data do empréstimo</th> 
                    <th scope="col">Hora do empréstimo</th>                         
                    <th scope="col">status</th>                   
                </tr>
            </thead>
            @foreach ($loans as $loan)
                <tr>
                    <td> {{ $loan->id }} </td>
                    <td> {{ $loan->material->name }} </td>
                    <td> {{ $loan->customer->username}} </td>
                    <td> {{ date ('d/m/Y', strtotime ($loan->loandate))}} </td>
                    <td> {{ date ('H:i', strtotime ($loan->loandate))}} </td>                       
                    <td> <a class="btn btn-primary" href="{{ route('devolutions.edit', $loan->id) }}" 
                        role="button">Registrar Devolução </a>                
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
