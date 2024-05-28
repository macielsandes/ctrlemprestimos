@csrf
<!--Forms de cadastro de usuario-->
<div>
    <label for="firstname'" class="form-label">Primeiro nome:</label>
    <input class="form-control" type="text" name="firstname" id="firstname"
        value="{{ $user->firstname ?? old('firstname') }}">

    <label for="lastname'" class="form-label">Ultimo nome</label>
    <input class="form-control" type="text" name="lastname" id="lastname"
        value="{{ $user->lastname ?? old('lastname') }}">

    <label for="email" class="form-label">E-mail:</label>
    <input class="form-control" type="email" name="email" id="email" value="{{ $user->email ?? old('email') }}">

    <label for="password" class="form-label">Senha:</label>
    <input class="form-control" type="password" name="password" id="password">

    <label for="password" class="form-label">Repeta senha:</label>
    <input class="form-control" type="password" name="password" id="password">

    <div class="form-group mb-3">
        <button type="submit" 
            class="btn btn-secondary">Salvar e Novo</button>
    </div>
    <div class="form-group mb-3">
        <button type="submit" 
            class="btn btn-secondary">Salvar e Sair</button>
    </div>

</div>
