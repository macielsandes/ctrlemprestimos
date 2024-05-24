@extends('Layouts.default')

@section('title', 'Empréstimo')

@section('content')

<!--Inicio-->
<div class="container">
    <h1>Novo Empréstimo</h1>  
    <form action="{{ route('loan.loanmaterial') }}" method="POST">
     @csrf
        @include('loan._partials.form')
     </form>
</div>

@endsection

