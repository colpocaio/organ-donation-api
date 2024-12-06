<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nome',
        'prazo',
        'blood_type',
        'mensagem',
        'sexo',
        'telefone',
        'endereco',
        'status',
    ];
}
