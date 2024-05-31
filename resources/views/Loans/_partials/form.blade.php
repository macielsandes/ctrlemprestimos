@csrf
<!--Forms de Emprestimo de material-->
<div class="col-md">
  <label for="material" class="form-label">Selecione o material:</label>
  <select name='material' id='material' class="form-select">
      <option>Selecione</option>
          @forelse ($materials as $material)
              <option value="{{ $material->id }}" {{ old ('material')== $material->id ? 'selected' : '' }}> {{ $material ->name }} </option>
          @empty
              <option value="">Nenhum material cadastrado!</option>
          @endforelse
  </select>

  <div class="col-md">
      <label for="customer" class="form-label">Selecione o usuário:</label>
      <select name='customer' id='customer' class="form-select">
          <option>Selecione</option>
              @forelse ($customers as $customer)
                  <option value="{{ $customer->id }}" {{ old ('customer')== $customer->id ? 'selected' : '' }}> {{ $customer ->firstname}} </option>
              @empty
                  <option value="">Nenhum cliente cadastrado! </option>
              @endforelse
      </select>

      <button type="submit">Salvar</button>  
</div>
