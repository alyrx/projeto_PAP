@extends('layouts.niceadmin')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="bi bi-house"></i> Home</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        {{-- <div class="card-body"> --}}
                        <div id="carouselExampleCaptions" class="carousel slide">
                            <div class="carousel-indicators">
                                <?php $a = 0; ?>
                                @while ($a <= $avisoCount)
                                    <button type="button" data-bs-target="#carouselExampleCaptions"
                                        data-bs-slide-to="{{ $a }}"
                                        @if ($a == 0) class="active" @endif aria-current="true"
                                        aria-label="Slide {{ $a + 1 }}"></button>
                                    <?php $a++; ?>
                                @endwhile

                                {{-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button> --}}
                            </div>
                            <div class="carousel-inner">
                                @forelse ($avisos as $aviso)
                                    <div class="carousel-item @if ($i === 0) active @endif">
                                        @if ($aviso->imagem)
                                            <img src="{{ asset('img/avisos/' . $aviso->imagem) }}" class="d-block w-100"
                                                alt="{{ $aviso->titulo }}" style="border-radius: 5px">
                                        @else
                                            <img src="{{ asset('img-notfound.jpg') }}" class="d-block w-100"
                                                alt="{{ $aviso->titulo }}" style="border-radius: 5px">
                                        @endif
                                        <div class="carousel-caption d-md-block">
                                            <h5>{{ $aviso->titulo }}</h5>
                                            <p class="text-nowrap" style="overflow:hidden">{{ $aviso->aviso }}</p>
                                        </div>
                                    </div>
                                    <?php $i++; ?>
                                    {{-- <div class="visually-hidden">{{$i++}}</div> --}}
                                @empty
                                    <div class="carousel-item active">
                                        <img src="{{ asset('img-notfound.jpg') }}" class="d-block w-100" alt="..."
                                            style="border-radius: 5px">
                                        <div class="carousel-caption d-md-block">
                                            <h5>Sem avisos ativos!</h5>
                                            {{-- <p></p> --}}
                                        </div>
                                    </div>
                                @endforelse
                                {{-- <div class="carousel-item">
                                    <img src="{{ asset('wallhaven-wypg9r.jpg') }}" class="d-block w-100" alt="..." style="border-radius: 5px">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Some representative placeholder content for the second slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('wallhaven-wypg9r.jpg') }}" class="d-block w-100" alt="..." style="border-radius: 5px">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Some representative placeholder content for the third slide.</p>
                                    </div>
                                </div> --}}
                            </div>
                            @if ($avisos->count() == 0 || $avisos->count() == 1)
                            @else
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            @endif
                        </div>
                        {{-- </div> --}}
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Teste Admin</h5>
                            <p>{{}}</p>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Teste Refeitório</h5>
                            <p><a class="btn btn-primary" href="{{ route('refeitorio.teste') }}">Aqui</a></p>
                        </div>
                    </div>
                </div> --}}


                {{-- <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Chat</h5>
                        <x-chat></x-chat>
                    </div>
                </div>
            </div> --}}
            </div>
        </section>
    </main><!-- End #main -->
@endsection
