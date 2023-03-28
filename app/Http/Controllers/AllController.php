<?php

namespace App\Http\Controllers;

use App\Models\Aviso;
use App\Models\Marcacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'DG Admin | Welcome';
        return view('all.index', compact('title'));
    }

    public function dashboard()
    {
        $title = 'DG Admin | Dashboard';
        $i = 0;
        $avisos = Aviso::all()->where('ativo', true);
        $avisoCount = Aviso::all()->where('ativo', true)->count() - 1;
        // $marcacao = Auth::user()->marcacoes->take(1);
        return view('all.dashboard', compact('avisos', 'title', 'i', 'avisoCount'));
    }
}
