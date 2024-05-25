@csrf
<!--Forms de Emprestimo de material-->
<div class="col-md">
  <label for="materiais" class="form-label">Selecione o material:</label>
  <select name='materiais' id='materiais' class="form-select">
      <option>Selecione</option>
          @forelse ($materials as $material)
              <option value="{{ $material->id }}" {{ old ('material')== $material->id ? 'selected' : '' }}> {{ $material ->name }} </option>
          @empty
              <option value="">Nenhum material cadastrado!</option>
          @endforelse
  </select>

  <div class="col-md">
      <label for="customers" class="form-label">Selecione o usuário:</label>
      <select name='customers' id='customers' class="form-select">
          <option>Selecione</option>
              @forelse ($customers as $customer)
                  <option value="{{ $customer->id }}" {{ old ('customer')== $customer->id ? 'selected' : '' }}> {{ $customer ->name }} </option>
              @empty
                  <option value="">Nenhum cliente cadastrado! </option>
              @endforelse
      </select>

      <button type="submit">Salvar</button>  
</div>
