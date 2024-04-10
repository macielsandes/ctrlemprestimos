@csrf
<!--Forms de usuario-->

<fieldset>
    <label for="FirstName">Nome:</label>
    <input type="text" name="firstName" id="firstName" value="{{ $customer->firstName ?? old('firstName') }}">

    <label for="LastName" c>Sobrenome:</label>
    <input type="text" name="lastName" id="lastName" value="{{ $customer->lastName ?? old('lastName') }}">

    <label for="Username">Username:</label>
    <input type="text" name="userName" id="userName" value="{{ $customer->username ?? old('username') }}">

    <label for="Email">E-mail:</label>
    <input type="email" name="email" id="Email" value="{{ $customer->email ?? old('email') }}">
</fieldset>
<div>
    <button type="submit">Salvar</button>
</div>
