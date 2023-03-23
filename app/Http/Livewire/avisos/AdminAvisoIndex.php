<?php

namespace App\Http\Livewire\Avisos;

use App\Models\Aviso;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAvisoIndex extends Component
{
    use WithFileUploads;
    public bool $isEditing = false;
    public bool $isDeleting = false;
    public bool $isDeletingFile = false;

    public string $titulo = '';
    public string $aviso = '';
    public $imagem;
    public int $select_ID = 0;

    protected $rules = [
        'titulo' => 'required|string|max:255',
        'aviso' => 'required|string|max:255',
    ];

    protected $listeners = [
        'alteracao' => '$refresh',
    ];

    public function resetInput()
    {
        $this->reset('titulo', 'aviso', 'imagem', 'isEditing', 'isDeleting','isDeletingFile', 'select_ID');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function render()
    {
        $avisos = Aviso::all();
        $imagem = $this->imagem;
        return view('livewire.avisos.admin-aviso-index', compact('avisos', 'imagem'));
    }

    public function changeVisible(Aviso $aviso)
    {
        $aviso->ativo = !($aviso->ativo);
        $aviso->save();
        $this->emitSelf('alteracao');
    }

    public function edit($id)
    {
        $aviso = Aviso::findOrFail($id);
        $this->select_ID = $id;
        $this->titulo = $aviso->titulo;
        $this->aviso = $aviso->aviso;

        $this->isEditing = true;
        $this->isDeleting = false;
    }

    public function update()
    {
        $validatedData = $this->validate();
        if ($this->imagem) {
            $this->validate([
                'imagem' => 'sometimes|image'
            ]);
            $imgName = time() . '.' . $this->imagem->extension();
            // $img->move(public_path('img\avisos'), $imgName);
            $this->imagem->storeAs('img\avisos', $imgName, 'app_public');
            $validatedData['imagem'] = $imgName;
        }
        $aviso = Aviso::find($this->select_ID);
        $aviso->update($validatedData);

        session()->flash('success', 'Aviso editado com sucesso');
        $this->resetInput();
        $this->emitSelf('alteracao');
    }

    public function confirmDelete($id)
    {
        $aviso = Aviso::findOrFail($id);
        $this->select_ID = $id;
        $this->titulo = $aviso->titulo;
        $this->aviso = $aviso->aviso;
        $this->imagem = $aviso->imagem;
        // $this->imagem = $aviso->imagem;
        $this->isDeleting = true;
        $this->isEditing = false;
    }
    public function delete()
    {
        $aviso = Aviso::findOrfail($this->select_ID);
        if(File::exists($this->imagem)) File::delete($this->imagem);
        $aviso->delete();
        session()->flash('success', 'Aviso eliminado com sucesso');
        $this->resetInput();
        $this->emitSelf('alteracao');
    }

    public function confirmDeleteFile($id)
    {
        $aviso = Aviso::findOrFail($id);
        $this->select_ID = $id;
        $this->titulo = $aviso->titulo;
        $this->aviso = $aviso->aviso;
        $this->imagem = $aviso->imagem;

        $this->isDeleting = false;
        $this->isEditing = false;
        $this->isDeletingFile = true;
    }
    public function deleteFile()
    {
        $aviso = Aviso::findOrFail($this->select_ID);
        $aviso['imagem'] = null;
        File::delete('img/avisos/' . $this->imagem);
        $aviso->update();

        session()->flash('success', 'Imagem eliminada com sucesso');
        $this->resetInput();
        $this->emitSelf('alteracao');
    }
}
