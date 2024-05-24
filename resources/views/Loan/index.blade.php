@extends('Layouts.default')

@section('title', 'Empréstimos')

@section('content')
    <div class="container text-center">
        <h1 >Controle de Materiais Emprestados</h1>
    </div>        
    
    <div class="container-fluid">
        <div class="row">
            <!--Botao de emprestimo -->
            <div class="col">
                <a class="btn btn-primary" href="{{ route('loan.register') }}" role="button">Registrar Empréstimo</a>
            </div>
            <div class="row">
                <!--Botao de devolucao -->
                <div class="col">
                    <a class="btn btn-primary" href="" role="button">Registrar Devolução </a>
                </div>
            </div>      
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
