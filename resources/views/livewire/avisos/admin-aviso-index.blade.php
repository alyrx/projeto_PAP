<div>
    <div class="pagetitle">
        <h1>Avisos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bi bi-house"></i> Home</a> / Admin / Avisos</li>
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
                                        <td class="col-2"><a href="{{asset('img/avisos/' . $aviso->imagem)}}" target="_blank" class="btn btn-sm btn-secondary"><i class="bi bi-eye"></i> Preview</a></td>
                                        {{-- Action buttons --}}
                                        <td>
                                            <div class="d-flex">
                                                <button
                                                    class="btn btn-sm {{ $aviso->ativo ? 'btn-primary' : 'btn-outline-primary' }}"
                                                    wire:click.prevent='changeVisible({{ $aviso->id }})'
                                                    title="Toggle warning visibility">
                                                    <i class="bi {{ $aviso->ativo ? 'bi-eye' : 'bi-eye-slash' }}"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-warning ms-1"
                                                    wire:click.prevent='edit({{$aviso}})'
                                                    title="Edit aviso">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-danger ms-1"
                                                    title="Delete aviso">
                                                    <i class="bi bi-trash"></i>
                                                </button>
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
