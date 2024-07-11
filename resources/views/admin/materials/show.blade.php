@extends('Layouts.default')

@section('title', 'Material')

@section('content')

<h2>Editar o Material {{ $material->name }}</h2>

<form action="{{ route('materials.update', $material->id) }}" method="post">
    @method('PUT')
    @include('materials._partials.form')
</form>

@endsection