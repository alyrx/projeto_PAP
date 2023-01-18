<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class Chat extends Component
{
    // https://www.youtube.com/watch?v=e3iQPsPI5Y0
    public function render()
    {
        return view('livewire.chat');
    }
}
