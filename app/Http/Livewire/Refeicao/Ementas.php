<?php

namespace App\Http\Livewire\Refeicao;

use App\Models\Ementa;
use App\Models\Marcacao;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Ementas extends Component
{
    public bool $isReserving = false;

    public $data;
    public string $sopa = '';

    public string $pratocarne = '';
    public string $pratopeixe = '';
    public string $pratovegetariano = '';
    public string $pratoEscolhido = '';

    public string $sobremesa = '';
    public string $fruta = '';
    public string $sobremesaEscolhida = '';
    public int $user_id = 0;
    public int $ementa_id = 0;

    protected $listeners = [
        'alteracao' => '$refresh',
    ];

    protected $rules = [
        'pratoEscolhido' => 'required',
        'sobremesaEscolhida' => 'required',
    ];

    public function resetInput()
    {
        $this->reset('isReserving', 'sopa', 'pratocarne', 'pratopeixe', 'pratovegetariano', 'sobremesa', 'fruta', 'user_id', 'ementa_id', 'pratoEscolhido', 'sobremesaEscolhida');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function render()
    {
        $ementas = Ementa::orderBy('data', 'ASC')->get();
        $marcacoes = Marcacao::all()->where('user_id' === Auth::user()->id);
        return view('livewire.refeicao.ementas', compact('ementas', 'marcacoes'));
    }

    public function confirmarMarcacaoEmenta($eid, $uid)
    {
        $ementa = Ementa::findOrFail($eid);
        $this->data = $ementa->data;
        $this->sopa = $ementa->sopa;
        $this->pratocarne = $ementa->pratocarne;
        $this->pratopeixe = $ementa->pratopeixe;
        $this->pratovegetariano = $ementa->pratovegetariano;
        // $this->pratos = [$ementa->pratocarne, $ementa->pratopeixe, $ementa->pratovegetariano];
        $this->sobremesa = $ementa->sobremesa;
        $this->fruta = $ementa->fruta;
        $this->user_id = $uid;
        $this->ementa_id = $eid;

        $this->isReserving = true;
    }
    public function marcarEmenta()
    {
        $validatedData = $this->validate();
        // dd($validatedData);
        $validatedData['prato'] = $this->pratoEscolhido;
        $validatedData['sobremesa'] = $this->sobremesaEscolhida;
        $validatedData['user_id'] = $this->user_id;
        $validatedData['ementa_id'] = $this->ementa_id;

        Marcacao::create($validatedData);
        session()->flash('success', 'Refeição marcada com sucesso.');
        $this->resetInput();
        $this->emitSelf('alteracao');
    }
}
