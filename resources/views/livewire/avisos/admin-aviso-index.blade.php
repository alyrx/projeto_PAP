<div>
    <div class="pagetitle">
        <h1>Avisos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a> / Admin / Avisos</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gestão de avisos</h5>
                        @livewire('avisos.admin-aviso-create')
                        <table class="table table-sm table-hover align-items-center mt-2">
                            <thead>
                                <tr>
                                    <th>Título</th>
                                    <th>Descrição</th>
                                    <th>Imagem</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($avisos as $aviso)
                                    <tr>
                                        <td>{{ $aviso->titulo }}</td>
                                        <td>{{ $aviso->aviso }}</td>
                                        {{-- Image preview button --}}
                                        <td class="col-2">
                                            {{-- Modal trigger --}}
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="bi bi-eye"></i>
                                                Preview
                                            </button>

                                            {{-- Modal --}}
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Image Preview</h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @if ($aviso->imagem)
                                                                <img src="../../storage/app/img/avisos/{{$aviso->imagem}}" alt="aaa">
                                                            @else
                                                                Sem imagem para pre-visualizar!
                                                            @endif
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        {{-- Action buttons --}}
                                        <td>
                                            <div class="d-flex flex-row">
                                                <button
                                                    class="btn btn-sm {{ $aviso->ativo ? 'btn-primary' : 'btn-outline-primary' }}"
                                                    wire:click.prevent='changeVisible({{ $aviso->id }})' title="Toggle warning visibility">
                                                    <i class="bi {{ $aviso->ativo ? 'bi-eye' : 'bi-eye-slash' }}"></i>
                                                </button>
                                                ED DL
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">Sem avisos</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
