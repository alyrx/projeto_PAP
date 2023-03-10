<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DG Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="icon" href="{{asset('logopap_ico.png')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid mx-5">
            <a class="navbar-brand" href="{{route('index')}}">
                <img class="pb-1" src="{{asset('logopap_sm.png')}}" alt="DG_logo" width="40px">
                <span class="ps-2">Admin</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('horarios') }}">horários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Refeitório</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Criar Avisos</a>
                    </li>
                </ul>
                <a href="{{route('dashboard')}}" class="btn btn-secondary">Staff Reserved</a>
            </div>
        </div>
    </nav>

    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            @foreach ($avisos as $aviso)
            <div class="carousel-item active">
                <img src="{{ $ativo->imagem ? asset('niceadmin/assets/img/grupos.png') : asset('img/avisos/' . $aviso->imagem) }}" class="d-block w-100" alt="{{ $aviso->titulo }}" width="auto" height="750px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $aviso->titulo }}</h5>
                    <p>{{ $aviso->aviso }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">

    </div>

    <footer class="bg-black py-3" style="color: #fff">
        <div class="text-center">
           <!-- "" /*Este comentário é super importante*\ "" --> <p>&copy;2023, DG Admin</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>
