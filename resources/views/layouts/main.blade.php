<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!--CSS PESSOAL-->
    <link rel="stylesheet" href="/css/styles.css">

    <!--CSS BOOTSTRAP-->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">

    <!--SCRIPT PESSOAL-->
    <script src="/js/main.js"></script>
    
    <!-- Fontes do Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <style>
        #items-list{
    list-style: none;
    padding-left: 0;
}
    </style>

</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="#" class="navbar-brand">
                    <ion-icon name="logo-laravel"></ion-icon>
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/create" class="nav-link">Criar Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div id="container-fluid">
            <div class="row">
                @if(session('msg'))
                <p class="msg">{{ session('msg' )}}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
    
    <footer>HDC Events &copy; 2022</footer>

    <!--ION ICON-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Bootstrap JS -->
    <script src="/bootstrap/js/bootstrap.bundle.js"></script>

    <!--IONIC ICON-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>
</html>