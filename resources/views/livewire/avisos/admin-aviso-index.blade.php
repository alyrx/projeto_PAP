<div>
    <div class="pagetitle">
        <h1>Avisos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bi bi-house"></i> Home</a> / Admin
                    / Avisos</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gestão de avisos</h5>
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                        @if ($isEditing)
                            <div class="alert alert-warning" role="alert">
                                <form class="row g-3" wire:submit.prevent='update' enctype="multipart/form-data">
                                    @csrf
                                    <h4 class="alert-heading">Editar Aviso</h4>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatTitulo"
                                                placeholder="Título" wire:model='titulo'>
                                            <label for="floatTitulo">Título do Aviso</label>
                                        </div>
                                        @error('titulo')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <i class="bi bi-exclamation-octagon me-1"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <div class="form-floating">
                                            <textarea id="floatAviso" cols="30" rows="10" class="form-control" wire:model="aviso"></textarea>
                                            <label for="floatAviso">Descrição do Aviso</label>
                                        </div>
                                        @error('aviso')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <i class="bi bi-exclamation-octagon me-1"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <div class="form-group">
                                            <label for="floatImagem">Imagem do Aviso</label>
                                            <input type="file" class="form-control" id="floatImagem"
                                                placeholder="Imagem" wire:model='imagem'>
                                        </div>
                                        @error('imagem')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <i class="bi bi-exclamation-octagon me-1"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="d-flex flex-row justify-content-between">
                                        <button type="cancel" class="btn btn-secondary mr-2"
                                            wire:click.prevent='resetInput'>Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Editar Aviso</button>
                                    </div>
                                </form>
                            </div>
                        @elseif ($isDeleting)
                            <div class="alert alert-danger" role="alert">
                                <form class="row g-3" wire:submit.prevent='delete' enctype="multipart/form-data">
                                    @csrf
                                    <h4 class="alert-heading">Confirmar eliminação do Aviso</h4>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatTitulo"
                                                placeholder="Título" wire:model='titulo' disabled>
                                            <label for="floatTitulo">Título do Aviso</label>
                                        </div>
                                        @error('titulo')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <i class="bi bi-exclamation-octagon me-1"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <div class="form-floating">
                                            <textarea id="floatAviso" cols="30" rows="10" class="form-control" wire:model="aviso" disabled></textarea>
                                            <label for="floatAviso">Descrição do Aviso</label>
                                        </div>
                                        @error('aviso')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <i class="bi bi-exclamation-octagon me-1"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    @if ($imagem)
                                        <div class="mb-2">
                                            <label for="imgAviso">Imagem do Aviso</label>
                                            <img id="imgAviso" src='{{asset('img/avisos/' . $imagem)}}' alt="Imagem do Aviso" class="w-25 form-control">
                                        </div>
                                    @endif

                                    <div class="d-flex flex-row justify-content-between">
                                        <button type="cancel" class="btn btn-secondary mr-2"
                                            wire:click.prevent='resetInput'>Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Eliminar Aviso</button>
                                    </div>
                                </form>
                            </div>
                        @elseif ($isDeletingFile)
                            <div class="alert alert-danger" role="alert">
                                <form class="row g-3" wire:submit.prevent='deleteFile' enctype="multipart/form-data">
                                    @csrf
                                    <h4 class="alert-heading">Confirmar eliminação da Imagem</h4>

                                    <div class="mb-2">
                                        <label for="imgAviso">Imagem do Aviso</label>
                                        <a target="_blank" href="{{asset('img/avisos/' . $imagem)}}">
                                            <img id="imgAviso" src='{{asset('img/avisos/' . $imagem)}}' alt="Imagem do Aviso" class="w-25 form-control">
                                        </a>
                                    </div>

                                    <div class="d-flex flex-row justify-content-between">
                                        <button type="cancel" class="btn btn-secondary mr-2"
                                            wire:click.prevent='resetInput'>Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Eliminar Imagem</button>
                                    </div>
                                </form>
                            </div>
                        @else
                            @livewire('avisos.admin-aviso-create')
                        @endif
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
                                        <td class="align-middle">{{ $aviso->titulo }}</td>
                                        <td class="text-break col-5 align-middle">{{ $aviso->aviso }}</td>
                                        {{-- Image preview button --}}
                                        <td><a href="{{ asset('img/avisos/' . $aviso->imagem) }}" target="_blank" class="btn btn-sm btn-secondary @if(!$aviso->imagem) disabled @endif">
                                                <i class="bi bi-eye"></i> Preview
                                            </a>
                                            <button
                                            class="btn btn-sm btn-outline-danger @if(!$aviso->imagem) disabled @endif"
                                            wire:click.prevent="confirmDeleteFile({{$aviso->id}})"
                                            title="Apagar imagem">
                                                <i class="bi bi-trash"></i> Apagar
                                            </button></td>
                                        {{-- Action buttons --}}
                                        <td>
                                            <div class="d-flex">
                                                <button
                                                    class="btn btn-sm {{ $aviso->ativo ? 'btn-primary' : 'btn-outline-primary' }}"
                                                    wire:click.prevent='changeVisible({{ $aviso->id }})'
                                                    title="Alterar a visibilidade do aviso">
                                                    <i class="bi {{ $aviso->ativo ? 'bi-eye' : 'bi-eye-slash' }}"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-warning ms-1"
                                                    wire:click.prevent="edit({{$aviso->id}})"
                                                    title="Editar aviso">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-danger ms-1"
                                                    wire:click.prevent="confirmDelete({{$aviso->id}})"
                                                    title="Eliminar aviso">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Sem avisos</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
