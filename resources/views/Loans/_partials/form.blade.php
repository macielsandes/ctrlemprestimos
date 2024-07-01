@csrf
<!--Forms de Emprestimo de material-->
<div class="container-fluid">
    <div class="row">
    <div class="col">
        <label for="material" class="form-label">Selecione o material:</label>
            <select name='material' id='material' class="form-select">
            <option>Selecione</option>
                <option value="">
                     </option>
  </select>

  <div class="col-md">
      <label for="customer" class="form-label">Selecione o usuário:</label>
      <select name='customer' id='customer' class="form-select">
          <option>Selecione</option>
                  <option value="">
                   </option>
      </select>
      <button type="submit" class="btn btn-secondary">Salvar</button>
</div>
