<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\MarcacaoController;
use App\Http\Controllers\RefeicaoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AllController::class, 'index'])->name('index');

Route::group(['middleware' => ['auth']], function() {
    // Route::get('/dashboard/user/test', function() {
    //     return view('teste.user');
    // })->name('user.teste');

    Route::get('/dashboard', [AllController::class, 'dashboard'])->name('dashboard');

    Route::get('/dashboard/horarios', function (){
        return view('all.horarios', ['title' => 'DG Admin | Horários']);
    })->name('horarios');

    Route::get('/dashboard/refeicoes/', function () {
        return view('all.refeicoes', ['title' => 'DG Admin | Refeições']);
    })->name('refeicoes.index');

    Route::resource('/dashboard/refeicoes/marcacoes', MarcacaoController::class);
});

Route::group(['middleware' => ['admin']], function() {
    // Route::get('/dashboard/admin/test', function() {
    //     return view('teste.admin');
    // })->name('adm.teste');

    Route::get('/dashboard/admin/horarios', function() {
        return view('admin.horarios', ['title' => 'DG Admin | Horários - Admin']);
    })->name('horarios.admin');

    Route::get('/dashboard/admin/avisos', function(){
        return view('admin.avisos', ['title' => 'DG Admin | Avisos']);
    })->name('avisos.admin');
});

Route::group(['middleware' => ['refeitorio']], function() {
    // Route::get('/dashboard/refeitorio/test', function() {
    //     return view('teste.refeitorio');
    // })->name('refeitorio.teste');

    Route::resource('/dashboard/admin/refeicoes', RefeicaoController::class);
    Route::get('/dashboard/admin/refeicoes/', [RefeicaoController::class, 'index'])->name('refeicoes.admin');
});

require __DIR__.'/auth.php';
