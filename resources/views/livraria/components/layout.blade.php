<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("titulo")</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
    <div id="site">
        <header>
            <div>
                <nav class="navbar bg-info">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{route('mostrar_livros')}}">Livraria Cissndle</a>

                        <div class="d-flex">
                            <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Search" id="filtro_js" name="filtro_js">

                            <button class="ms-3 navbar-toggler bg-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>

                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Livraria Cissndle</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>

                            <div class="offcanvas-body">
                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="{{route('mostrar_livros')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{route('contato')}}">Contato</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{route('anuncios')}}">Anúncios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{route('about')}}">Quem somos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{route('criar_usuario')}}">Criar Novo Usuário</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{route('add_livro')}}">Adicionar novo Livro</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{route('consultar_livro')}}">Consultar Livros</a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </nav>
            </div>
        </header>

        <main class="container">
            <div class="mt-5">
                @yield("cabecalho")
            </div>
            @yield("main")
        </main>

        <?php

        use Illuminate\Support\Facades\Route;

        $rota_atual = Route::getCurrentRoute()->getName();
        ?>

        @if($rota_atual == "mostrar_livros" || $rota_atual == "anuncios" || $rota_atual == "filtrar_livro")
        @if($livros->count() == 0)
        <footer class="bg-info position-absolute bottom-0 col-12 d-flex align-items-center justify-content-center" style="height: 10vh;">
            <span class="opacity-50">Biblioteca Jonástica de Escritos Filosóficos, Poéticos e Históricos &copy; </span>
        </footer>
        @else
        <footer class="bg-info position-relative col-12 d-flex align-items-center justify-content-center" style="height: 10vh;">
            <span class="opacity-50">Biblioteca Jonástica de Escritos Filosóficos, Poéticos e Históricos &copy; </span>
        </footer>
        @endif
        @else
        <footer class="mt-3 bg-info position-relative bottom-0 col-12 d-flex align-items-center justify-content-center" style="height: 10vh;">
            <span class="opacity-50">Biblioteca Jonástica de Escritos Filosóficos, Poéticos e Históricos &copy; </span>
        </footer>
        @endif

    </div>
</body>

</html>