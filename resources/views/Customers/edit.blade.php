@extends('Layouts.default')

@section('title', 'Cliente')

@section('content')

<h1> Editar cliente {{ $customer->name }}</h1>

<form action="{{ route('customers.update', $customer->id)}}" method="post">
    @method('PUT')
    @include('Customers._partials.form')
</form>
@endsection