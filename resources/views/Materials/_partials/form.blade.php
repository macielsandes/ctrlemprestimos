@csrf   
  <!--Forms de cadastro de Material-->
    <label for="fnome">Nome:</label>
      <input type="text" name="nome" id="textarea" placeholder="Nome" 
        value="{{ $material-> nome ?? old('nome') }}">
           
      <label for="fdescricao">Nome:</label>
        <input type="text" name="descricao" id="textarea" placeholder="Descricao" 
         value="{{ $material-> descricao ?? old('descricao') }}">
      
      <label for="qtd">Quantidade:</label>
        <input type="number" name="qtd" id='qtd' placeholder="1" 
          value="{{$material->qtd ?? old ('qtd')}}">
      
      <label for="qty">Imagem:</label>      
        <input type="file" id='fileMaterial' name="fileimagem"         
          value="{{ $material->imagem ?? old ('imagem')}}">  

      <button type="submit">Salvar</button>
 