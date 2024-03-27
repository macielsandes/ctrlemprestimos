<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="IE=edge">

    <!--fontes do Google-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Meu CSS do projeto-->
    <link rel="stylesheet" href="/css/styleapp.css">

    <title>@yield('title') - Controle de Empréstimos</title>
</head>

<body>
<h1>Home</h1>

</div class=" py-5 d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

<nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="/index">CTRL EMPRÉSTIMOS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03"
            aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/index">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/user">Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/material">Materiais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Empréstimo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Devolução</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</div>

    

</body>

</html>
