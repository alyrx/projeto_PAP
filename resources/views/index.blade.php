@extends('layouts.blank')

@section('content')
    <div class="pagetitle">
        <h1>Blank Page</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Blank</li>
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
        </div>
    </section>
@endsection
