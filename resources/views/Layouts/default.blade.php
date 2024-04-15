<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Icons Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />    
    
    <title>@yield('title') - Controle de Empréstimos</title>
</head>

<body>
<div class="container-fluid ">    
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">    
    <div class="container-fluid">
        <a class="navbar-brand" href="/dashboard">CTRL EMPRÉSTIMOS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03"
            aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/dashboard">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/user">Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/customer">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/material">Materiais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/loan">Empréstimo</a>
                </li>
            </ul>
            
        </div>
    </div>
</nav>
</div> 

 <!--Conteudo-->
 <section class="container">
    @yield('content')
</section>


<footer>      
    <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top"">
        <p class="col-md-4 mb-0 text-muted">CTRL Empréstimos; {{ date('Y') }}</p>
        <a href="/"
            class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
        </a>
    </div>    
</footer>

    <!-- Js Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
