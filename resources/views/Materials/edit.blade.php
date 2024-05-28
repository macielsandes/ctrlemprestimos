@extends('Layouts.default')

@section('title', 'Material')

@section('content')

<h2>Editar o Material {{ $material->name }}</h2>

<form action="{{ route('material.update', $material->id) }}" method="post">
    @method('PUT')
    @include('materials._partials.form')
</form>

@endsection