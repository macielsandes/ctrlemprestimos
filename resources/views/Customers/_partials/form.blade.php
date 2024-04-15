@csrf
<!--Forms de usuario-->

<fieldset>
    <label for="firstname">Nome:</label>
    <input type="text" name="firstname" id="firstname" value="{{ $customer->firstname ?? old('firstname') }}">

    <label for="lastname" c>Sobrenome:</label>
    <input type="text" name="lastname" id="lastname" value="{{ $customer->lastname ?? old('lastname') }}">

    <label for="username">Username:</label>
    <input type="text" name="username" id="username" value="{{ $customer->username ?? old('username') }}">

    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" value="{{ $customer->email ?? old('email') }}">
</fieldset>
<div>
    <button type="submit">Salvar</button>
</div>
