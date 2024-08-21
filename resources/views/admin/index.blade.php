@extends('admin.layouts.default')

@section('title', 'Home')

@section('content')

    <div class="container-fluid p-3 border mt-10">
        <div class="row container-fluid bg-light border p-4 rounded">
            <div class="col">
                <h1>Home</h1>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-5 col-sm-5">
                <div class="card  mb-2">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">Usuários</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Total cadastrado</p>
                            <h4 class="mb-0">{{ $users }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-1">
        <div class="row">
            <div class="col-lg-5 col-sm-4">
                <div class="card  mb-2">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">Materiais</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Total cadastrado</p>
                            <h4 class="mb-0">{{ $materials }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-1">
        <div class="row">
            <div class="col-lg-5 col-sm-5">
                <div class="card  mb-2">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">Disponíveis</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Total Disponível para empréstimo</p>
                            <h4 class="mb-0">{{ $materials }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
