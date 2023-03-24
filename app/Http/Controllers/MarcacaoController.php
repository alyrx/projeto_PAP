<?php

namespace App\Http\Controllers;

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
}
