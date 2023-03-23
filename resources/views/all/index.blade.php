<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ $title }}</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('logopap_ico.png') }}" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('creative/assets/css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand align-middle" href="#page-top"><img src="{{ asset('logopap_ico.png') }}" alt=""
                    width="40px"> Admin</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">Sobre nós</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Portofolio</a></li>
                    <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link">Área Reservada</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">O teu local de trabalho preferido</h1>  
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto ipsam neque distinctio? Consequatur iusto natus ut iure unde, sint quisquam nisi id fugit corrupti, deserunt, illum sit et magni rerum alias placeat dolorum suscipit beatae!</p>
                    <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Sobre nós</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique rem necessitatibus consequuntur sunt veritatis exercitationem aliquam, eaque dolores illum quas doloribus accusamus.</p>
                    <a class="btn btn-light btn-xl" href="#services">Vamos começar!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Os nossos serviços</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-calendar fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Horários</h3>
                        <p class="text-muted mb-0">Criação de horários</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-cup fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Refeitório</h3>
                        <p class="text-muted mb-0">Marcação e visualização de refeições</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-exclamation-diamond fs-1 text-primary"></i></i></div>
                        <h3 class="h4 mb-2">Avisos</h3>
                        <p class="text-muted mb-0">Vizualização de avisos</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-chat-left-text fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Chat</h3>
                        <p class="text-muted mb-0">Conversa interna</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <div id="portfolio">
        @auth
            <div class="container">
                <div class="row g-0 d-flex justify-content-center">
                    <div class="card mb-4 me-2" style="width: 16rem;">
                        <img src="{{asset('img/avisos/1678470392.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Refeitório</h5>
                            <a href="#" class="btn btn-primary d-flex"><span>Entrar</span></a>
                        </div>
                    </div>
                    <div class="card mb-4 me-2" style="width: 16rem;">
                        <img src="{{asset('img/avisos/1678470392.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Horários</h5>
                            <a href="#" class="btn btn-primary d-flex"><span>Entrar</span></a>
                        </div>
                    </div>
                    <div class="card mb-4 me-2" style="width: 16rem;">
                        <img src="{{asset('img/avisos/1678470392.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Avisos</h5>
                            <a href="#" class="btn btn-primary d-flex"><span>Entrar</span></a>
                        </div>
                    </div>
                    <div class="card mb-4 me-2" style="width: 16rem;">
                        <img src="{{asset('img/avisos/1678470392.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Chat</h5>
                            <a href="#" class="btn btn-primary d-flex"><span>Entrar</span></a>
                        </div>
                    </div>
                </div>
            </div>
        @endauth
    </div>
    <!-- Footer-->
    <footer class="p-3 mb-2 bg-secondary text-white">
        <div class="container px-4 px-lg-5">
            <div class="small text-center">Copyright &copy; 2022 - Company Name</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('creative/assets/js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
