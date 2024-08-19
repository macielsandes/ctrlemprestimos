@extends('admin.layouts.default')

@section('title', 'Cliente')

@section('content')

<h1> Editar cliente {{ $customer->name }}</h1>

<form action="{{ route('customers.update', $customer->id)}}" method="post">
    @method('PUT')
    @include('admin.customers._partials.form')
</form>
@endsection
