@csrf
<!--Forms de Emprestimo de material-->

<div class="container-fluid">
    <div class="row">
        <div class="col mt-3">
            <label for="material" class="form-label">Selecione o material:</label>
            <select name='material' id='material' class="form-select">
                <option>Selecione</option>
                @forelse ($materials as $material)
                    <option value="{{ $material->id }}" {{ old ('material') == $material->id ? 'selected' : ''}}> {{$material->name}} </option>
                @empty
                    <option value="">Nenhum material cadastrado!</option>
                @endforelse
                </option>
            </select>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="customer" class="form-label">Selecione o usuário:</label>
                <select name='customer' id='customer' class="form-select">
                    <option>Selecione</option>
                    @forelse ($customers as $customer)
                        <option value="{{ $customer->id }}" {{ old('customer') == $customer->id ? 'selected' : '' }}> {{ $customer->username }} </option>
                    @empty
                        <option value="">Nenhum cliente cadastrado! </option>
                    @endforelse
                </select>
            </div>
        </div>
            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-secondary">Salvar</button>
                </div>
            </div>
        </div>
</div>
