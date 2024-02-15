<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Projeto Pet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
}

.img-account-profile{
    width: 100%;
    height: 40vh;
}
    </style>
</head>
<body class="d-flex flex-column h-100">

    <header class="flex-shrink-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="{{route('index')}}"><img class="img-fluid" style="max-width: 80px" src="{{asset('assets/img/logo.png')}}" alt="">Projeto Pet</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{route('index')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('index') . '#sobre'}}">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('list')}}">Abrigos</a></li>

                        @guest
                        <li class="nav-item"><a class="nav-link" href="{{route('admin.create')}}">Cadastrar abrigo</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('login.index')}}">Entrar</a></li>
                        @endguest

                        @auth
                        <div class="dropdown">

                            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Olá, {{auth()->user()->name}}
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <li><a class="dropdown-item" href="{{route('admin.profile', auth()->user())}}">Perfil</a></li>
                              <form action="{{route('admin.logout')}}" method="post">
                                @csrf
                                <li><button type="submit" class="dropdown-item" >Sair</button></li>
                              </form>
                            </ul>
                          </div>
                        @endauth

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="py-5 bg-dark">
        <div class="container"><p class="m-0 text-center text-white">Desenvolvido por Guilherme Ueyama | 2024</p></div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
