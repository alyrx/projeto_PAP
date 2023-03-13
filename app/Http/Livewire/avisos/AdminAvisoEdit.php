<?php

namespace App\Http\Livewire\Avisos;

use App\Models\Aviso;
use Livewire\Component;

class AdminAvisoEdit extends Component
{
    public Aviso $aviso;
    
    public function render()
    {
        return view('livewire.avisos.admin-aviso-edit');
    }
}
