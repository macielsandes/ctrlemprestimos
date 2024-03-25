@csrf   
  <!--Forms de cadastro de Material-->
      <label for="nome" class="form-label">Nome:</label>
        <input class="form-control" type="text" name="nome" id="textarea" placeholder="Nome" 
          value="{{ $material-> nome ?? old('nome') }}">
           
      <label for="descricao">Descrição:</label>
        <textarea class="form-control" rows="3" id="descricao" id="textarea" placeholder= "descricao" 
        value="{{ $material-> descricao ?? old('descricao') }}"></textarea> 
      
          <label for="qtd" class="form-label">Quantidade:</label>
      <input class="form-control" type="number" name="qtd" placeholder="1" value="{{$material->qtd ?? old ('qtd')}}">
      
      <label for="qty" class="form-label">Imagem:</label>      
      <input class="form-control" type="text" name="imagem" value="{{ $material->imagem ?? old ('imagem')}}">  
      
      <button type="submit" class="btn btn-secondary">Salvar</button>
 