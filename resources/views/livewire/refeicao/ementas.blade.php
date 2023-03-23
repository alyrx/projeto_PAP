<div>
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
            <div class="@if(!$isReserving) col-lg-12 @else col-lg-4 @endif">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ementas</h5>
                        <div class="accordion" id="accordionExample">
                            <?php $i = 1?>
                            @forelse ($ementas as $ementa)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading<?php echo $i?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse<?php echo $i?>" aria-expanded="true" aria-controls="collapse<?php echo $i?>">
                                            {{ date('d/m/Y', strtotime($ementa->data)) }}
                                        </button>
                                    </h2>
                                    <div id="collapse<?php echo $i?>" class="accordion-collapse collapse"
                                        aria-labelledby="heading<?php echo $i?>" data-bs-parent="#accordionExample">
                                        <div class="accordion-body mb-4 pb-4">
                                            <table class="table table-sm mt-1">
                                                <tbody>
                                                    <tr><td><strong>Sopa:</strong> {{$ementa->sopa}}</td></tr>
                                                    <tr><td><strong>Prato Carne:</strong> {{$ementa->pratocarne}}<br><strong>Prato Peixe:</strong> {{$ementa->pratopeixe}}<br><strong>Prato Vegetariano:</strong> {{$ementa->pratovegetariano}}</td></tr>
                                                    <tr><td><strong>Sobremesa:</strong> {{$ementa->sobremesa}}</td></tr>
                                                    <tr><td><strong>Fruta:</strong> {{$ementa->fruta}}</td></tr>
                                                </tbody>
                                            </table>
                                            <a wire:click.prevent="confirmarMarcacaoEmenta({{$ementa->id}}, {{Auth::user()->id}})" class="btn btn-outline-primary float-end">Marcar Refeição</a>
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
            @if ($isReserving)
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Marcação</h5>
                            <div class="alert alert-info">
                                <h5>Confirmar Marcação</h5>
                                <form class="row g-3">
                                    @csrf
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="floatData"
                                            placeholder="Data" wire:model='data' disabled>
                                        <label for="floatData">Data</label>
                                    </div>

                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatSopa"
                                            placeholder="Sopa" wire:model='sopa' disabled>
                                        <label for="floatSopa">Sopa</label>
                                    </div>

                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatSobremesa"
                                            placeholder="Sobremesa" wire:model='sobremesa' disabled>
                                        <label for="floatSobremesa">Sobremesa</label>
                                    </div>

                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatFruta"
                                            placeholder="Fruta" wire:model='fruta' disabled>
                                        <label for="floatFruta">Fruta</label>
                                    </div>

                                    <div class="d-flex flex-row justify-content-between">
                                        <button type="cancel" wire:click.prevent="resetInput" class="btn btn-secondary">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Confirmar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
</div>
