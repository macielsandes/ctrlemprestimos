@extends('Layouts.default')

@section('title', 'Cliente')

@section('content')

<div>
    <h1>Emprestimo de material</h1>
</div class="card-body">
<form action="{{ route('loans.store') }}" method="post">
    @csrf
    @include('loans._partials.form')
</form>
</div>

@endsection

