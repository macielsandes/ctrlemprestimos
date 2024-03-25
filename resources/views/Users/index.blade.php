<div class="container mt-3">
    <h2>Usuários</h2>   
</div>
    <div class="container mt-6 py-3">      
            <div class="row d-flex bd-highlight">               
                <!--Botao para cadastro de novo usuario-->          
                <div class="col">          
                    <a class="btn btn-primary" href="{{ route('users.create') }}" role="button">Novo Usuario</a>          
                </div>  
                
                <!--Div da barra de pesquisa-->     
                <div class="col">                          
                    <form class=" d-flex ms-auto p-2 bd-highlight" action="{{ route('users.index') }}" method="get">
                        <input class="form-control me-2" type="search" name ="search" placeholder="Pesquisar" aria-label="Pesquisar">                        
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>                     
                    </form>
                </div>
            </div>
    </div>

<div class="table-responsive">
    <table class="table table-bordered">
        <caption>Listagem de usuários</caption>
            <thead class="table-dark table-striped ">
                    <tr>
                        <th scope="col">Id</th>      
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>            
                        <th scope="col"></th>
                        <th scope="col"></th>                                    
                    </tr>
                </thead>
                    <tbody> 
                        @foreach ($users as $user)                           
                        <tr> 
                            <td> {{ $user->id }}</td>               
                            <td> {{ $user->name }}</td>
                            <td> {{ $user->email }}</td>
                            <td> Vazio</td> 
                            <td> Vazio</td>                           
                            <td>                               
                                <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}" role="button">Editar</a> 
                            </td> 
                            <td> 
                                <a class="btn btn-primary" href="{{ route('users.show', $user->id) }}" role="button">Remover</a> 
                            </td>
                        </tr>
                        @endforeach    
                    </tbody>
    </table>
    </div>

    <div class="container mt-6">
        <ul class="pagination  justify-content-center">
            <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Próxima</a></li>
          </ul>
    </div>

</div>    

@endsection