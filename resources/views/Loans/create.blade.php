@extends('Layouts.default')

@section('title', 'Emprestimo de Material')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1>Empréstimo de material</h1>
            </div>
        </div>
        <form action="{{ route('loans.store') }}" method="post">
            @csrf
            @include('loans._partials.form')
        </form>
    @endsection
