@extends('Layouts.default')

@section('title', 'Registrar Emprestimo')

@section('content')

<div class="container-fluid border p-3 mt-10">
    <h1>Registrar Empréstimo</h1>
    <form action="{{ route('loans.update', $loans->material_id)}}" method="post">
        @csrf
        @include('Loans._partials.form')
    </form>
</div>

@endsection
