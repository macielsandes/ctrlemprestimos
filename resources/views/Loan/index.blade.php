@extends('Layouts.default')

@section('title', 'Empréstimos')

@section('content')
    <div class="container text-center">
        <h1>Materiais disponíveis para empréstimo</h1>
    </div>

    <div class="container-fluid mt-3">
        <div class="row py-2">
            <!--Botao de emprestimo -->
            <div class="col-md-6">
                <a class="btn btn-primary" href="{{ route('loan.create') }}" role="button">Registrar Empréstimo</a>
            </div>
           
        </div>

        <!--Div da barra de pesquisa-->
        <div class="col-md-3">
            <form action="/material/search" method="get">
                <input type="text" id="search" name ="search" class="form-control" placeholder="Pesquisar material">                    
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
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
                    <th scope="col">Emprestado a:</th>
                </tr>
            </thead>  
            
            @foreach ($loans as $loan)
            <tr>
                <td> {{ $loan->id }} </td>
                <td> {{ $loan->material->name }} </td>
                <td> {{ $loan->customer->fistname }} </td>              
            </tr>
        @endforeach       


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
