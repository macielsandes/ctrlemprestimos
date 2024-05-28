@csrf
<!--Forms de cadastro de Material-->
<div class="form-group mb-3 mt-3">
    <label for="fname">Nome:</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Nome de identificação do material"
        value="{{ $material->name ?? old('nome') }}">
</div>
<div class="form-group mb-3 mt-3">
    <label for="fdescription">Descrição:</label>
      <textarea name="description" id="description" rows="10" class="form-control" 
        placeholder=" Uma breve descrição para identificação do material"
        value="{{ $material->description ?? old('description') }}"> </textarea>
</div>
<div class="form-group mb-3 mt-3">
    <label for="image">Imagem do material:</label>
    <input type="file" id='image' name="image" class="from-control-file"
        value="{{ $material->image ?? old('image') }}">
</div>
    <input type="submit" class="btn btn-primary" value="Salvar Material">
