@csrf
<!--Forms de cadastro de usuario-->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <label for="firstname" class="form-label">Nome:</label>
            <input class="form-control" type="text" name="firstname" id="firstname"
                value="{{ $user->firstname ?? old('firstname') }}">
        </div>
        <div class="col">
            <label for="lastname'" class="form-label">Sobrenome:</label>
            <input class="form-control" type="text" name="lastname" id="lastname"
                value="{{ $user->lastname ?? old('lastname') }}">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="username" class="form-label">Nome que deseja ser chamado:</label>
            <input class="form-control" type="text" name="username" id="username"
                value="{{ $user->username ?? old('username') }}">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="email" class="form-label">E-mail:</label>
            <input class="form-control" type="email" name="email" id="email"
                value="{{ $user->email ?? old('email') }}">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="password" class="form-label">Senha:</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>
        <div class="row">
            <div class="col">
            <label for="password" class="form-label">Repeta senha:</label>
            <input class="form-control" type="password" name="password" id="password">
            </div> 
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-secondary">Salvar</button>
        </div>
    </div>
</div>
