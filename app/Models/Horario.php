<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $fillable = [
        'dia_horario',
        'hora_entrada',
        'hora_saida',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
