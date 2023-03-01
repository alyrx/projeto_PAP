<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marcacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ementa_id',
        'prato',
        'sobremesa',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function ementa(){
        return $this->belongsTo(Ementa::class);
    }
}
