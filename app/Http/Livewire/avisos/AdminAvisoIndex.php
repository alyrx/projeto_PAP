<?php

namespace App\Http\Livewire\Avisos;

use App\Models\Aviso;
use Livewire\Component;

class AdminAvisoIndex extends Component
{
    protected $listeners = [
        'alteracao' => '$refresh',
    ];
    
    public function render()
    {
        $avisos = Aviso::all();
        return view('livewire.avisos.admin-aviso-index', compact('avisos'));
    }

    public function changeVisible(Aviso $aviso)
    {
        $aviso->ativo = !($aviso->ativo);
        $aviso->save();
        $this->emitSelf('alteracao');
    }
}
