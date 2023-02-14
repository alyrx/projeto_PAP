<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ementa extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'sopa',
        'pratocarne',
        'pratopeixe',
        'pratovegetariano',
        'sobremesa',
        'fruta',
    ];


    public function marcacoes(){
        return $this->hasMany(Marcacao::class);
    }
}
