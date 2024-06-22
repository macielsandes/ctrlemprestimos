@extends('Layouts.default')

@section('title', ' Cadastrar Material')

@section('content')
    <!--Inicio-->
    <div id='material-create-container' class="col-md-6 offset=md-3">
        <h1>Cadastrar novo Material</h1>
        <form action="{{ route('materials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('materials._partials.form')
        </form>
    </div>
@endsection
