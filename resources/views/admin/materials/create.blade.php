@extends('admin.layouts.default')

@section('title', ' Cadastrar Material')

@section('content')
    <!--Remover esta DIV e deixar apenas o yield-->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1>Cadastrar novo Material</h1>
            </div>
        </div>
    </div>

    <form action="{{ route('materials.store') }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @include('admin.materials._partials.form')
    </form>
@endsection
