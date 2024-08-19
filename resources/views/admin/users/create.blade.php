@extends('admin.layouts.default')

@section('title', 'Cadastrar novo usuário')

@section('content')

<!--Remover esta DIV e deixar apenas o yield-->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1>Novo usuário</h1>
        </div>
    </div>
</div>
<!--Será mostrado mensagem de erro caso algum campo não seja preenchido corretamente-->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error )
                        <li class="error">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


    <form action="{{ route('users.store') }}" method="post">
        @csrf
        @include('admin.users._partials.form')
    </form>
@endsection
