@extends('layouts.blank')

@section('content')
    <div class="pagetitle">
        <h1>Blank Page</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Teste User</h5>
                        <p><a href="{{route('user.teste')}}">Aqui</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Teste Admin</h5>
                        <p><a href="{{route('adm.teste')}}">Aqui</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Teste Refeitório</h5>
                        <p><a href="{{route('refeitorio.teste')}}">Aqui</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Chat</h5>
                        <x-chat></x-chat>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
