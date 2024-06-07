@extends('Layouts.default')

@section('title', 'Registrar Devolução')

@section('content')

<div class="container-fluid border p-3 mt-10">
    <h1>Registrar Devolução de Material</h1>
    <form action="{{ route('devolution.update', $loans->id)}}" method="post">
        @csrf
        @include('Devolution._partials.form')
    </form>
</div>

@endsection
