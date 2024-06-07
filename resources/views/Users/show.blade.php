@extends('Layouts.default')

@section('title', 'Usuarios')

@section('content')

<h2>Editar o Material {{ $user->name }}</h2>

<form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    @include('users._partials.form')
</form>

@endsection