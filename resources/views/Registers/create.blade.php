<!--Inicio-->
<div class="container">             
    <h1> Registrar empréstimo</h1>
        <form action="{{ route('registers.store') }}" method="POST">
         @csrf
            @include('registers._partials.form')
         </form>
</div>