<!-- Parte superior-->
<header class="row">
    <nav class="col navbar navbar-expand-sm p-4 bg-body-tertiary sticky-top" aria-label="Seg navbar" data-bs-theme="dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                CTRL EMPRÉSTIMOS
            </a>
            <!--Cria o menu de hamburguer-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavBar"
                aria-controls="#menuNavBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col">
            <div class="collapse navbar-collapse" id="menuNavBar">
                <div class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="{{ route('dashboards.index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">Usuários</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('customers.index') }}">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('materials.index') }}">Materiais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Listar Empréstimos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Emprestar Material</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Devolver Material</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
