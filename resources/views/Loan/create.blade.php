@extends('Layouts.default')

@section('title', 'Cliente')

@section('content')

<div>
    <h1>Emprestimo de material</h1>
</div class="card-body">
<form action="{{ route('loan.store') }}" method="post">
    @csrf
    @include('loan._partials.form')
</form>
</div>

@endsection

