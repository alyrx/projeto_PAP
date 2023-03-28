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
            <a class="navbar-brand align-middle" href="#page-top"><img src="{{ asset('logopap_ico.png') }}"
                    alt="" width="40px"> Admin</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">Sobre nós</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Serviços</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="#services">Portofolio</a></li> --}}
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
                    <p class="text-white-75 mb-5"></p>
                    <a class="btn btn-primary btn-xl" href="#about">Sobre nós</a>
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
                    <!-- o sobre nós pode ser modificado pelas empresas -->
                    <p class="text-white-75 mb-4">O nosso produto foi criado no âmbito de criar algo que fosse útil  nas
                        empresas, a escolha das funcionalidades foi devido a querermos criar algo que fosse de certa forma novo e ao mesmo tempo seguro, assim podendo ter uma maior procura deste produto.</p>
                    <a class="btn btn-light btn-xl" href="#services">Vamos começar!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Os nossos serviços</h2>
            <p>
                <br>
                <h5 class="text-center">Horários</h5>
                <p class="text-center">Com o nosso sistema de horários, queríamos trazer um novo esquema de trabalho, uma vez que o horário será flexível de forma a que o trabalhador trabalhe a quantidade de horas que quiser, desde que alcance o número de horas obrigatórias por semana.</p>
            <br>
                <h5 class="text-center">Refeições</h5>
                <p class="text-center">As marcações podem ser desmarcadas até 32 horas antes da refeição marcada, as ementas terão sopa, um prato de carne, peixe ou vegetariano e a opção de fruta ou sobremesa.</p>
            <br>
                <h5 class="text-center">Chat</h5>
                <p class="text-center">O chat vem inovar a comunicação, sendo de forma interna e estando desta maneira mais protegido de invasões ou tentativas de roubo via links como acontece no e-mail.</p>
            <br>
                <h5 class="text-center">Avisos</h5>
                <p class="text-center">Os avisos foram desenvolvidos para dar uma informação geral importante ou para reuniões.</p>
            </p>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-calendar fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Horários</h3>
                        <p class="text-muted mb-0">Criação e visualização de horários</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-cup fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Refeitório</h3>
                        <p class="text-muted mb-0">Criação, marcação e visualização de refeições</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-exclamation-diamond fs-1 text-primary"></i></i></div>
                        <h3 class="h4 mb-2">Avisos</h3>
                        <p class="text-muted mb-0">Criação, visualização e pré-visualização de avisos</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-chat-left-text fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Chat</h3>
                        <p class="text-muted mb-0">Conversa interna entre funcionários</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="p-3 mb-2 bg-secondary text-white">
        <div class="container px-4 px-lg-5">
            <div class="small text-center">Copyright &copy; 2023 - DG Admin</div>
            <div class="small text-center">Designed by <a href="https://startbootstrap.com/" style="">Start
                    Bootstrap</a>. Modified by DG Admin</div>
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
