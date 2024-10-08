<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'user_id',
        'h_entrada',
        'h_saida',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
