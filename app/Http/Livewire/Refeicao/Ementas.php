<?php

namespace App\Http\Livewire\Refeicao;

use App\Models\Ementa;
use Livewire\Component;

class Ementas extends Component
{
    public bool $isReserving = false;

    public $data;
    public string $sopa = '';
    public $pratos = []; //Pratos a escolher
    public string $prato = ''; //Prato escolhido
    public string $sobremesa = '';
    public string $fruta = '';
    public int $user_id = 0;

    protected $listeners = [
        'alteracao' => '$refresh',
    ];

    // protected $rules = [

    // ];

    public function resetInput()
    {
        $this->reset('isReserving', 'sopa', 'pratos', 'prato', 'sobremesa', 'fruta');
    }

    public function render()
    {
        $ementas = Ementa::all();
        return view('livewire.refeicao.ementas', compact('ementas'));
    }

    public function confirmarMarcacaoEmenta($eid, $uid)
    {
        $ementa = Ementa::findOrFail($eid);
        $this->sopa = $ementa->sopa;
        $this->pratos = [$ementa->pratocarne, $ementa->pratopeixe, $ementa->pratovegetariano];
        $this->sobremesa = $ementa->sobremesa;
        $this->fruta = $ementa->fruta;
        $this->user_id = $uid;

        $this->isReserving = true;
    }
    public function marcarEmenta()
    {

    }
}
