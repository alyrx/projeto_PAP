<?php

namespace App\Http\Controllers;

use App\Models\Marcacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MarcacaoController extends Controller
{
    public function index()
    {
        $title = 'DG Admin | Refeições - Marcações';
        $marcacoes = Auth::user()->marcacoes;
        return view('all.marcacoes', compact('title', 'marcacoes'));
    }

    public function destroy($id)
    {
        $marcacao = Marcacao::findOrFail($id);
        $marcacao->delete();
        return redirect()->back();
    }
}
