@extends('Layouts.default')

@section('title', 'Empréstimos')

@section('content')
    <div class="container-fluid p-3 mt-10 bg-light border p-4 rounded">
        <div class="row">
            <div class="col">
                <h1>Materiais disponíveis</h1>
            </div>
        </div>
    </div>
    <div class="row p-3 d-flex bd-highlight">
        <!--Botao de emprestimo -->
        <!--<div class="col-6">
            <a class="btn btn-primary" href="" role="button">Novo Empréstimo</a>
        </div> Botao de emprestimo -->
        <!--Div da barra de pesquisa-->
        <div class="col-6">
            <form class="d-flex ms-auto p-2 bd-highlight" action="" method="get">
                <input type="text" id="search" name ="search" class="form-control" placeholder="Pesquisar material">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
        </div>
    </div>
    <div>
        <!--Inicio da Tabela-->
        <div class=" p-3 table-responsive">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome do Material</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Imagem</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                @foreach ($loans as $loan)
                    <tr>
                        <th scope="row">{{ $loan->id }}</th>
                        <td> {{ $loan->name }} </td>
                        <td> {{ $loan->description }} </td>
                         <td>
                            <img src="img/materials/{{ $loan->image }}"
                                class="rounded mx-auto d-block" style="max-height:30px; max-width:30px" alt="" srcset="">
                        </td>
                        <td>
                            <a class="btn btn-primary" href="" role="button">Emprestar Material</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div>
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
