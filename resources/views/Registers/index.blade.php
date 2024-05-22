@extends('Layouts.default')

@section('title', 'Registrar')

@section('content')
    <div class="container text-center">
        <h1>Controle de Materiais Emprestados</h1>
    </div>
    
    <!-- Container para o botão e barra de pesquisa-->
    <div class="container-fluid">
        <div class="row">
            <!--Botao de emprestimo -->
            <div class="col">
                <a class="btn btn-primary" href="{{ route('registers.create') }}" role="button">Novo Empréstimo</a>
            </div>
        </div>        
    
    </div>
    
    
@endsection
