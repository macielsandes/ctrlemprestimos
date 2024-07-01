@extends('Layouts.default')

@section('title', 'Empréstimo')

@section('content')

    <div class="container-fluid border p-3 mt-10">
        <div class="row">
            <div class="col">
                <div class="container-fluid bg-light border p-4 rounded text-center">
                    <h1>Emprestar Material</h1>
                </div>
            </div>
        </div>
    </div>

    <form action="" method="post">
        @csrf
        <!--Forms de Emprestimo de material-->
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <label for="material" class="form-label">Selecione o material:</label>
                    <select name='material' id='material' class="form-select">
                        <option>Selecione</option>
                            @forelse ($material as $mat)
                        <option value="{{ $material->id }}"> {{ $material ->name }} </option>
                    @empty
                        <option value="">Nenhum material cadastrado!</option>
                    @endforelse
                        </option>
                    </select>
                </div>
                    <div class="col-md">
                        <label for="customer" class="form-label">Selecione o usuário:</label>
                        <select name='customer' id='customer' class="form-select">
                            <option>Selecione</option>
                            <option value="">
                            </option>
                        </select>
                        <button type="submit" class="btn btn-secondary">Salvar</button>
                    </div>
            </div>
        </div>
    </form>
@endsection
