@extends('Layouts.default')

@section('title', 'Cliente')

@section('content')

<h1>Remover usuário {{ $customer->name }}</h1>

<ul>
    <li>{{ $customer->id }}</li>
    <li>{{ $customer->name }}</li>
    <li>{{ $customer->email }}</li>
</ul>

<form action="{{ route('customers.destroy', $customer->id) }}" method="post">
    @method('DELETE')
    @csrf
    <button type="submit">Remover</button>
</form>
@endsection