@csrf
<!--Forms de cadastro de usuario-->
<div>
    <label for="fFirstName'" class="form-label">Primeiro nome:</label>
    <input class="form-control" type="text" name="firstName" id="fFirstName"
        value="{{ $user->firstName ?? old('firstName') }}">

    <label for="fLastName'" class="form-label">Ultimo nome</label>
    <input class="form-control" type="text" name="lastName" id="fLastName"
        value="{{ $user->lastName ?? old('lastName') }}">

    <label for="fEmail" class="form-label">E-mail:</label>
    <input class="form-control" type="email" name="email" id="fEmail" value="{{ $user->email ?? old('email') }}">

    <label for="fSenha" class="form-label">Senha:</label>
    <input class="form-control" type="password" name="password" id="fSenha">

    <label for="fSenha" class="form-label">Repete senha:</label>
    <input class="form-control" type="password" name="password" id="fSenha">

    <!--Tipo de usuario que será criado-->
    <fieldset>
        <h2>Tipo de usuário</h2>
        <div>
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
            <label class="form-check-label" for="gridRadios1">Padrão
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
            <label class="form-check-label" for="gridRadios2">Administrador
            </label>
        </div>
</div>
</fieldset>

<div class="form-group mb-3">
    <button type="submit" class="btn btn-secondary">Salvar</button>
</div>
</div>
