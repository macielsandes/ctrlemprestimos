@extends('admin.layouts.default')

@section('title', 'Editar usuário')

@section('content')
    <div class="container-fluid border p-3 mt-10">
        <h2>Editando o Usuário {{ $user->name }}</h2>
    </div>
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('PUT')
        @include('admin.users._partials.form')
    </form>
@endsection
