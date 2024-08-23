@csrf
<!--Forms de cadastro de Material-->
<div class="container-fluid border bg-body-tertiary mb-3">
    <div class="row mb-3">
        <div class="col">
            <label for="name" class="form-label">Nome:</label>
            <input class="form-control" placeholder="Nome de identificação" type="text" id="name" name="name"
                value="{{ $material->name ?? old('name') }}">
        </div>
    </div>
    <div class="row g-3">
        <div class="col">
            <label for="description" class="form-label">Descrição:</label>
            <textarea  class="form-control" placeholder="Uma breve descrição do material
                name="description" id="description" rows="5"
                value="{{ $material->description ?? old('description') }}">
            </textarea>
        </div>
    </div>
    <div class="row g-3">
        <div class="col">
            <label for="image">Imagem do material:</label>
        </div>
        <div class="row g-3">
            <div class="col">
                <input type="file" id='image' name="image" class="from-control-file"
                    value="{{ $material->image ?? old('image') }}">
            </div>
        </div>
    </div>
    <div class="row g-3">
        <div class="col-">
            <button type="submit" class="btn btn-secondary"> Salvar</button>
        </div>
    </div>
</div>
