@extends('Layouts.default')

@section('title', 'Emprestimo de Material')

@section('content')

<div class="container-fluid border p-3 mt-10">
    <h1>Empréstimo de material</h1>
    <form action="{{ route('loans.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('loans._partials.form')
    </form>
</div>

@endsection

