<div>
    <h1>Novo usuário</h1>
</div class="card-body">
<form action="{{ route('users.store') }}" method="post">
    @csrf
    @include('users._partials.form')
</form>
</div>
