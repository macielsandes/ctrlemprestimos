@extends('Layouts.default')

@section('title', 'Usuário')

@section('content')
    <div class="container-fluid border p-3 mt-10">
        <h2>Editar o Usuário {{ $user->name }}</h2>
    </div>
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('PUT')
        @include('users._partials.form')
    </form>
@endsection
