@extends('layouts.niceadmin')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Teste User</h5>
                            <p><a class="btn btn-primary" href="{{ route('user.teste') }}">Aqui</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Teste Admin</h5>
                            <p><a class="btn btn-primary" href="{{ route('adm.teste') }}">Aqui</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Teste Refeitório</h5>
                            <p><a class="btn btn-primary" href="{{ route('refeitorio.teste') }}">Aqui</a></p>
                        </div>
                    </div>
                </div>


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
