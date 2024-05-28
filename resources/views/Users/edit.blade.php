@extends('Layouts.default')

@section('title', 'Usuario')

@section('content')

<h2>Editar o Usuário {{ $user->name }}</h2>

<form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    @include('users._partials.form')
</form>

@endsection