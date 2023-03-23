<div>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    @if ($isAdding)
        <div class="alert alert-primary" role="alert">
            <form class="row g-3" wire:submit.prevent='save' enctype="multipart/form-data">
                @csrf
                <h4 class="alert-heading">Criar Aviso</h4>
                <div class="col-md-6 mb-2">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatTitulo" placeholder="Título" wire:model='titulo'>
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
                        <input type="text" class="form-control" id="floatAviso" placeholder="Aviso" wire:model='aviso'>
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
                        <input type="file" class="form-control" id="floatImagem" placeholder="Imagem" wire:model='imagem'>
                    </div>
                    @error('imagem')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-octagon me-1"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- <div class="col-md-12 mb-2">
                    <div class="form-floating">
                        <input type="file" class="form-control" id="floatImagem" placeholder="Imagem">
                    </div>
                </div> --}}

                <div class="d-flex flex-row justify-content-between">
                    <button type="cancel" class="btn btn-secondary mr-2" wire:click.prevent='resetInput'>Cancelar</button>
                    <button type="submit" class="btn btn-primary">Gravar Aviso</button>
                </div>
            </form>
        </div>
    @else
        <div class="row g-3">
            <button type="button" class="btn btn-primary" wire:click.prevent="$set('isAdding', true)">
                <i class="bi bi-plus-circle"></i>
                Adicionar Aviso
            </button>
        </div>
    @endif
</div>
