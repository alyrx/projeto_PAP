<?php

namespace App\Http\Controllers;

use App\Models\Aviso;
use Illuminate\Http\Request;

class AllController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avisos = Aviso::where('ativo', true);
        $title = 'DG Admin | Welcome';
        return view('all.index', compact('avisos', 'title'));
    }
}
