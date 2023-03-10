<?php

namespace App\Http\Livewire\Avisos;

use App\Models\Aviso;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class AdminAvisoCreate extends Component
{
    use WithFileUploads;
    public bool $isAdding = false;

    public string $titulo = '';
    public string $aviso = '';
    public $imagem;


    protected $rules = [
        'titulo' => 'required|string|max:255',
        'aviso' => 'required|string|max:255',
    ];

    public function resetInput()
    {
        $this->reset('titulo', 'aviso', 'isAdding');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function render()
    {
        return view('livewire.avisos.admin-aviso-create');
    }

    public function save()
    {
        $validatedData = $this->validate();
        if ($this->imagem) {
            $this->validate([
                'imagem' => 'nullable|image|mimes:png,jpg'
            ]);
            $imgName = time() . '.' . $this->imagem->extension();
            $this->imagem->storeAs('img/avisos', $imgName);
            $validatedData['imagem'] = $imgName;
            Storage::putFile('img/avisos', $imgName);
        }
        Aviso::create($validatedData);
        session()->flash('success', 'Aviso criado com sucesso');
        $this->resetInput();
        $this->emit('alteracao');
    }
}
