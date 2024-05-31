@extends('Layouts.default')

@section('title', 'Registrar Emprestimo')

@section('content')

<div class="container-fluid border p-3 mt-10">
    <h1>Registrar empréstimo {{ $loan->material_id }}</h1>
</div>

<form action="{{ route('loans.update', $loan->material_id) }}" method="post">
    @method('PUT')
    @include('Loans._partials.form')
</form>

@endsection
