@csrf
<!--Forms de usuario-->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <label for="firstname" class="form-label">Nome:</label>
            <input class="form-control" type="text" name="firstname" id="firstname" value="{{ $customer->firstname ?? old('firstname') }}">
        </div>
        <div class="col">
            <label for="lastname" class="form-label">Sobrenome:</label>
            <input class="form-control" type="text" name="lastname" id="lastname" value="{{ $customer->lastname ?? old('lastname') }}">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="username" class="form-label">Username:</label>
            <input class="form-control" type="text" name="username" id="username" value="{{ $customer->username ?? old('username') }}">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="email" class="form-label">E-mail:</label>
            <input class="form-control" type="email" name="email" id="email" value="{{ $customer->email ?? old('email') }}">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-secondary">Salvar</button>
        </div>
    </div>
</div>
