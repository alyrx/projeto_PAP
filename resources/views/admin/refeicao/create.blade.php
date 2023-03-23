@extends('layouts.niceadmin')

@section('content')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Create Ementa</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="bi bi-house"></i> Home</a> / Ementa / Create</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="alert alert-primary">
            <form action="{{ route('refeicoes.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="data">Data da Refeição</label>
                    <input class="form-control" type="date" name="data" id="data">
                </div>
                <hr>
                <div class="mb-3">
                    <label for="sopa" class="form-label">Sopa</label>
                    <input class="form-control" type="text" name="sopa" class="form-control" id="sopa">
                </div>
                <hr>
                <div class="mb-3">
                    <label for="pratocarne" class="form-label">Prato de Carne</label>
                    <input class="form-control" type="text" name="pratocarne" id="pratocarne">
                </div>
                <div class="mb-3">
                    <label for="pratopeixe" class="form-label">Prato de Peixe</label>
                    <input class="form-control" type="text" name="pratopeixe" id="pratopeixe">
                </div>
                <div class="mb-3">
                    <label for="pratovegetariano" class="form-label">Prato de Vegetariano</label>
                    <input class="form-control" type="text" name="pratovegetariano" id="pratovegetariano">
                </div>
                <hr>
                <div class="mb-3">
                    <label for="sobremesa" class="form-label">Sobremesa</label>
                    <input class="form-control" type="text" name="sobremesa" id="sobremesa">
                </div>
                <div class="mb-3">
                    <label for="fruta" class="form-label">Fruta</label>
                    <input class="form-control" type="text" name="fruta" id="fruta">
                </div>
                <div class="d-flex flex-row justify-content-between">
                    <a href="{{route('refeicoes.admin')}}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar Ementa</button>
                </div>
            </form>
        </div>
    </section>
</main>
@endsection
