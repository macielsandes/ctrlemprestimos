@extends('Layouts.default')

@section('title', 'Home')

@section('content')

<h2>Editar o Usuário {{ $user->name }}</h2>

@include('includes.validations-form')

<form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    @include('users._partials.form')
</form>





@endsection