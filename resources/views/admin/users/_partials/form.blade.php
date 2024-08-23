@csrf
<!--Forms de cadastro de usuario-->
<div class="container-fluid border bg-body-tertiary mb-3">
    <div class="row mb-3">
        <div class="col">
            <label for="firstname" class="form-label">Nome:</label>
            <input class="form-control" placeholder="Digite o nome" type="text" name="firstname" id="firstname"
                value="{{ $user->firstname ?? old('firstname') }}">
        </div>
        <div class="col">
            <label for="lastname" class="form-label">Sobrenome:</label>
            <input class="form-control" placeholder="Digite o sobrenome" type="text" name="lastname" id="lastname"
                value="{{ $user->lastname ?? old('lastname') }}">
        </div>
        <div class="col">
            <label for="username" class="form-label">Username:</label>
            <input class="form-control" placeholder="Digite o nome de usuário" type="text" name="username"
                id="username" value="{{ $user->username ?? old('username') }}">
        </div>
        <div class="col">
            <label for="email" class="form-label">E-mail:</label>
            <input class="form-control" placeholder="Digite o e-mail" type="email" name="email" id="email"
                value="{{ $user->email ?? old('email') }}">
        </div>
        <div class="col">
            <label for="password" class="form-label">Senha:</label>
            <input class="form-control" placeholder="Digite a senha" type="password" name="password" id="password">
            <div class="col-auto">
                <span id="passwordHelpInline" class="form-text">
                    A senha deve ter 6-20 carácteres.
                </span>
            </div>
        </div>
        <div class="col-12">
            <label for="password" class="form-label">Repeta senha:</label>
            <input class="form-control" placeholder="Repita a senha" type="password" name="password_confirmation"
                id="password_confirmation">
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-secondary">Salvar</button>
        </div>
    </div>
<div
