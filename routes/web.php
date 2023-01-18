<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/teste/user', function() {
        return view('teste.user');
    })->name('user.teste');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard/horarios', function (){
        return view('horarios');
    })->name('horarios');
});

Route::group(['middleware' => ['admin']], function() {
    Route::get('/teste/admin', function() {
        return view('teste.admin');
    })->name('adm.teste');
});

Route::group(['middleware' => ['refeitorio']], function() {
    Route::get('/teste/refeitorio', function() {
        return view('teste.refeitorio');
    })->name('refeitorio.teste');
});

require __DIR__.'/auth.php';
