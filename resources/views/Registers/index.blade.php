@extends('Layouts.default')

@section('title', 'Registrar')

@section('content')

    <div class="container text-center">
        <h1>Empréstimos</h1>
    </div>

    <!-- Container para o botão e barra de pesquisa-->
    <div class="container-fluid">
        <div class="row">
            <!--Botao para cadastro de novo usuario-->
            <div class="col">
                <a class="btn btn-primary" href="{{ route('registers.create) }}" role="button">Registrar Empréstimo</a>
            </div>
        </div>
        <!--Botao para cadastro de novo usuario-->
        <div class="col">
            <a class="btn btn-primary" href="{{ route('registers.return') }}" role="button">Registrar Devolução</a>
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
    

@endsection
