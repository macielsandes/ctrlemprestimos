@extends('Layouts.default')

@section('title', 'Registrar')

@section('content')

<!--Inicio-->
<div class="container">
    <h1>Novo empréstimo de Material </h1>  
    <form action="{{ route('registers.loan') }}" method="POST">
     @csrf
        @include('registers._partials.form')
     </form>
</div>

@endsection

