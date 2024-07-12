@extends('admin.layouts.default')

@section('title', 'Cliente')

@section('content')

<div>
    <h1>Novo Cliente</h1>
</div class="card-body">
<form action="{{ route('customers.store') }}" method="post">
    @csrf
    @include('admin.customers._partials.form')
</form>
</div>

@endsection


