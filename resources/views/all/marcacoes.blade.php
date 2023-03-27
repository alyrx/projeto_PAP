@extends('layouts.niceadmin')

@section('content')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Marcações Efetuadas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="bi bi-house"></i> Home</a> / Refeições / Marcações</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table mt-2">
                            <thead>
                                <tr>
                                    <th>Data</th>
                                    <th>Sopa</th>
                                    <th>Prato</th>
                                    <th>Sobremesa</th>
                                    <th>Acões</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($marcacoes as $marcacao)
                                    <tr class="align-middle">
                                        <td>{{date('d/m/Y', strtotime($marcacao->ementa->data))}}</td>
                                        <td>{{$marcacao->ementa->sopa}}</td>
                                        @switch($marcacao->prato)
                                            @case('C') <!-- Prato Carne -->
                                                <td>{{$marcacao->ementa->pratocarne}}</td>
                                            @break
                                            @case('P') <!-- Prato Peixe -->
                                                <td>{{$marcacao->ementa->pratopeixe}}</td>
                                            @break
                                            @case('V') <!-- Prato Vegetariano -->
                                                <td>{{$marcacao->ementa->pratovegetariano}}</td>
                                            @break
                                        @endswitch

                                        @switch($marcacao->sobremesa)
                                            @case('S') <!-- Sobremesa -->
                                                <td>{{$marcacao->ementa->sobremesa}}</td>
                                            @break
                                            @case('F') <!-- Fruta -->
                                                <td>{{$marcacao->ementa->fruta}}</td>
                                            @break
                                        @endswitch
                                        <td>
                                            {{-- <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i> Alterar</a> --}}
                                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Cancelar</a>
                                        </td>
                                    </tr>
                                @empty
                                    <td colspan="5" class="text-center">Sem marcações efetuadas!</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
