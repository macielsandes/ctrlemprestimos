<!--Inicio-->
<div class="container">             
        <h1> Novo Material</h1>
            <div class="row">
                <div class="col">
                    <form action="{{ route('materials.store') }}" method="POST">
                    @csrf
                    @include('materials.partials.form')
                </form>
</div>

