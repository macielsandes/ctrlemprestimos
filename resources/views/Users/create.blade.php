@extends('Layouts.default')

@section('title', 'Cadastrar novo usuário')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1>Cadastro de novo usuário</h1>
            </div>
        </div>
    </div>    
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        @include('users._partials.form')
    </form>
@endsection
