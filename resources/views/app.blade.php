<!doctype html>
<html lang="pt-br">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>@yield('titulo')</title>
</head>
<body>
    <div class="container">
        <div class="container">
            <ul class="nav">
                <li class="nav-item">
                    <a class="button nav-link" href="{{ route('home') }}">Página Inicial</a>
                </li>
                <li class="nav-item">
                    <a class="button nav-link" href="{{ route('clientes.create') }}">Cadastrar</a>
                </li>
                <li class="nav-item">
                    <a class="button nav-link" href="#">Pesquisar</a>
                </li>
                <li class="nav-item">
                    <a class="button nav-link" href="#">Minha Conta</a>
                </li>
                <li class="nav-item">
                    <a class="button nav-link" href="#">Sair</a>
                </li>
            </ul>
            <hr>
        </div>
        <div class="container">
            @yield('conteudo')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>