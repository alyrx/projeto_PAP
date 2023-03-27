@extends('layouts.niceadmin')

{{-- @include('livewire.refeicao.marcacao-index') --}}
@section('content')

<?php
    function marcacaoCount($array, $ementa_id){
        $c = 0;
        foreach ($array as $marcacao) {
            if ($marcacao->ementa_id === $ementa_id) {
                $c += 1;
            }
        }
        return $c;
    }

    function marcPratoCount($array, $ementa_id, $escPrato)
    {
        $c = 0;
        foreach ($array as $marcacao) {
            if ($marcacao->ementa_id === $ementa_id && $marcacao->prato === $escPrato) {
                $c += 1;
            }
        }
        return $c;
    }

    function marcSobremesaCount($array, $ementa_id, $escSobremesa)
    {
        $c = 0;
        foreach ($array as $marcacao) {
            if ($marcacao->ementa_id === $ementa_id && $marcacao->sobremesa === $escSobremesa) {
                $c += 1;
            }
        }
        return $c;
    }
?>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Refeições</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bi bi-house"></i> Home</a> /
                        Refeições</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ementas</h5>
                            <div class="row g-3 mb-3">
                                <a href="{{route('refeicoes.create')}}" class="btn btn-primary">
                                <i class="bi bi-plus-circle"></i> Criar Ementa
                            </a>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <?php $i = 1?>
                                @forelse ($ementas as $ementa)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading<?php echo $i?>">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse<?php echo $i?>" aria-expanded="true" aria-controls="collapse<?php echo $i?>"> {{-- {{$marcacoes->where('ementa_id' === $ementa->id)}} --}}
                                                {{ date('d/m/Y', strtotime($ementa->data)) }} | <?php echo 'Total Marcações: ' . marcacaoCount($marcacoes, $ementa->id);?>
                                            </button>
                                        </h2>
                                        <div id="collapse<?php echo $i?>" class="accordion-collapse collapse"
                                            aria-labelledby="heading<?php echo $i?>" data-bs-parent="#accordionExample">
                                            <div class="accordion-body mb-4 pb-4">
                                                <table class="table table-sm mt-1">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <?php echo 'Pedidos: ' . marcacaoCount($marcacoes, $ementa->id);?> | <strong>Sopa:</strong> {{$ementa->sopa}}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <?php echo 'Pedidos: ' . marcPratocount($marcacoes, $ementa->id, 'C') ?> | <strong>Prato Carne:</strong> {{$ementa->pratocarne}}<br>
                                                                <?php echo 'Pedidos: ' . marcPratocount($marcacoes, $ementa->id, 'P') ?> | <strong>Prato Peixe:</strong> {{$ementa->pratopeixe}}<br>
                                                                <?php echo 'Pedidos: ' . marcPratocount($marcacoes, $ementa->id, 'V') ?> | <strong>Prato Vegetariano:</strong> {{$ementa->pratovegetariano}}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <?php echo 'Pedidos: ' . marcSobremesaCount($marcacoes, $ementa->id, 'S') ?> | <strong>Sobremesa:</strong> {{$ementa->sobremesa}}<br>
                                                                <?php echo 'Pedidos: ' . marcSobremesaCount($marcacoes, $ementa->id, 'F') ?> | <strong>Fruta:</strong> {{$ementa->fruta}}
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="float-end">
                                                    <a href="#" class="btn btn-warning me-1"><i class="bi bi-pencil"></i> Editar</a>
                                                    <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i> Eliminar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $i++?>
                                @empty
                                    <p class="text-center">Não existem ementas de momento!</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
