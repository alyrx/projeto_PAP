@extends('layouts.niceadmin')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Horários</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a> / Horários</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">----</h5>
                            <p>-----</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">-----</h5>
                            <p>-----</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
